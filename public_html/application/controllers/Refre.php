<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refre extends CI_Controller {
    private function get_session(){
		$user = array(
			'id_user' => $this->session->userdata('id_user'),
			'nama_user'=> $this->session->userdata('nama_user'),
			'logged_in' => FALSE,
		);
		return $user;
	}
    public function __construct()
	{
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('User_model');

    }
	public function index()
	{
		$this->load->view('refre/index');
    }
    
    public function authentication_member($auth)
	{
		$status='';
		$hasil=$this->db->query("call verify_email_member('$auth')");
		foreach ($hasil->result() as $row)
				{
				   $status = $row->status;
				}
		#var_dump($status);
		if($status=='sukses')
		{
			$this->index();
		}else if($status=='gagal'){
			$this->index();
		}else {
			redirect('/not_found');
		}
	}
    
    public function menu_stylist()
	{
        $id_stylist = $this->session->userdata('id_stylist');
        $data['list_consult'] = $this->db->query("SELECT * FROM chatroom LEFT JOIN ((select nama_user, id_chatroom from user) m, category_chat )
                 ON (chatroom.id_chatroom=m.id_chatroom AND chatroom.id_category_chat=category_chat.id_category_chat) where fashion is null");
        $data['list_history'] = $this->db->query("select chatroom.id_chatroom,chatroom.user, user.nama_user from chatroom, user 
where chatroom.fashion=$id_stylist and user.id_user= chatroom.user order by chatroom.id_chatroom desc;");
        $this->load->view('refre/stylist/menustylist', $data);
    }
    
    public function search_portfolio()
    {
        $this->load->helper('security');
        $search=$this->input->post('search');
        $query=$this->db->query("SELECT foto.`id_foto`,COUNT(l.id_like) as total FROM foto, `like_foto` l WHERE l.`id_foto`=foto.`id_foto` GROUP BY foto.id_foto");
        if(count($query->result())>0){
            foreach($query->result() as $row){
                $like[$row->id_foto]=$row->total;
            }
            $data['like1']= $like;
        }else{
            $data['like1']=0;
        }
        $data['myuploads'] = $this->db->query("select * from foto where tag like '%$search%'");
        $this->load->view('refre/user/portfolio',$data);
        
    }
    
    
    public function fs_temp()
    {
        $this->load->view('refre/styler');
        
    }
    
    public function style()
    {
        $this->load->helper('security');
        $style=$this->input->post('style');
        $query=$this->db->query("SELECT foto.`id_foto`,COUNT(l.id_like) as total FROM foto, `like_foto` l WHERE l.`id_foto`=foto.`id_foto` GROUP BY foto.id_foto");
        if(count($query->result())>0){
            foreach($query->result() as $row){
                $like[$row->id_foto]=$row->total;
            }
            $data['like1']= $like;
        }else{
            $data['like1']=0;
        }
        $data['myuploads'] = $this->db->query("select * from foto where category=$style");
        $this->load->view('refre/user/portfolio',$data);
        
    }
    
    public function chatting()
    {
        $this->load->helper('security');
        $email=$this->input->post('email');
        $password=$this->input->post('password');


        $result=$this->Home_model->login($email,$password);

        if($result)redirect('/refre/refre_profile');
        else {
            $this->session->set_flashdata('status', 'Login gagal, cek email dan password Anda');
            redirect('/refre');
        }
    }
    
    public function hapus_foto($id_)
    {
        $query=$this->db->query("DELETE FROM foto WHERE id_foto = '$id_'");
        redirect('/refre/refre_profile');
    }
    
    public function controlpanel()
	{
		$status = 0;
		$cek_alamat = $this->User_model->cek_alamat();
		foreach($cek_alamat->result() as $row){
			$status = $row->status;
		}
		$data['brand'] = $this->Home_model->show_brand();
		$detail['data']= $this->User_model->get_akun_data();
		$this->load->view('header/header_1');
		$this->load->view('refre/parts/navbar');
		if($status == 1){
		$this->session->userdata('id_user');
		$detail['id_kota_asal'] = $this->User_model->get_id_kota();
		$this->load->view('home/controlpanel',$detail);
		}
		$this->load->view('refre/parts/footer');
	}
    
	public function edit_pp(){
		$id_user = $this->session->userdata('id_user');
		$config['upload_path'] = './assets/img/refre/pp/';
		$config['file_name']=$id_user.'.jpg';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size']	= '2000';
		$config['overwrite'] = TRUE; 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
            var_dump($error);
		}
		else
		{
			$data = $this->upload->data();
			$sasa['image_library'] = 'gd2';
		        $sasa['source_image']    =   $data['full_path'];
			$sasa['new_image'] = './assets/img/refre/pp/'.$id_user.'.jpg';
			$sasa['file_name']=$id_user.'.jpg';
			$sasa['maintain_ratio'] = TRUE;
			$sasa['width']         = 128;
			$sasa['height']= 128;
	                $sasa['overwrite'] = TRUE;
	                $this->load->library('image_lib', $sasa);
			$this->image_lib->resize();
		}
        redirect('/refre/refre_profile');
	}
    
    
    public function upload_perid()
    {
        $this->load->helper('security');
        $title=$this->input->post('title');
        $tag=$this->input->post('tag');
        $category=$this->input->post('category');
        $gender=$this->input->post('gender');
        $bc=$this->input->post('bc');
        $id_user=$this->session->userdata('id_user');
        $target_file = basename($_FILES["file"]["name"]);

        $config['upload_path'] = './assets/img/refre/';
        $config['file_name']=$target_file;
        $config['allowed_types'] = 'jpg|png|gif|jpeg';
        $config['max_size']	= '15000';
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        }else{
            $this->db->query("insert into foto(id_user, foto, title, category, gender, tag, buyers_code) values ('$id_user', '$target_file', '$title', '$category', '$gender','$tag','$bc')");
            $config['image_library'] = 'gd2';
		    $config['source_image']    =   $data['full_path'];
            $sasa['new_image'] = './assets/img/refre/$target_file';
			$config['file_name']=$target_file;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 300;
			$config['height']= 300;
	        $config['overwrite'] = TRUE;
	        $this->load->library('image_lib', $config);
			$this->image_lib->resize();
            redirect('/refre/refre_profile');
        }


    //        $this->db->query("insert into foto(id_user, title, category, gender, tag, buyers_code) values ('$id_user', '$title', '$category', '$gender','$tag','$bc')");

    }


    public function like($id){
        $id_user=$this->session->userdata('id_user');

        $this->db->query("insert into like_foto (id_foto,id_user) values ('$id','$id_user')");
        redirect("/refre/collection_detail/$id");

    }
    public function unlike($id){
        $id_user=$this->session->userdata('id_user');

        $this->db->query("delete from like_foto where id_foto='$id' and id_user='$id_user'");
        redirect("/refre/collection_detail/$id");
    }

    public function upload(){
        $this->load->view('refre/user/upload');
    }
    
    public function uploadpp(){
        $this->load->view('refre/user/uploadpp');
    }

    public function collection_detail($id)
	{
        $id_user=$this->session->userdata('id_user');


        $query = $this->db->query("select * from like_foto where id_foto='$id' and id_user='$id_user'");
        $data['like'] = $query->row_array()['id_like'];


        $data['myuploads'] = $this->db->query("select * from foto where id_foto='$id'");
        $data['comment'] = $this->db->query("select * from comment where id_foto='$id'");

        $query1=$this->db->query("call get_id_like('$id')");
        $data['total'] = $query1->row_array()['total'];
        if(!$data['total']) $data['total']= 0 ;
		$this->load->view('refre/user/collection-detail',$data);
    }

    public function verifikasi_login_user(){
        $this->load->helper('security');
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $result=$this->Home_model->login($email,$password);

        if($result) redirect('/refre/refre_profile');
        else {
            $this->session->set_flashdata('status', 'Login gagal, cek email dan password Anda');
             redirect('/refre');
        }
    }

	public function logout(){
		$newdata = array(
			'id_user' => '',
			'id_stylist'   => '',
			'nama_user' => '',
            'nama_stylist' => '',
			'type_user' => '',
			'email_user'=> '',
			'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/refre', 'refresh');
	}
    
    public function verifikasi_login_stylist(){
        $this->load->helper('security');
        $email=$this->input->post('email');
        $password=$this->input->post('password');

        $result=$this->Home_model->login_stylist($email,$password);

        if($result) redirect('/refre/menu_stylist');
        else {
            $this->session->set_flashdata('status', 'Login gagal, cek email dan password Anda');
             redirect('/refre/stylist');
        }
    }

    public function refre_profile(){
        $id_=$this->session->userdata('id_user');
        $query=$this->db->query("SELECT foto.`id_foto`,COUNT(l.id_like) as total FROM foto, `like_foto` l WHERE l.`id_foto`=foto.`id_foto` GROUP BY foto.id_foto");
        if(count($query->result())>0){
            foreach($query->result() as $row){
                $like[$row->id_foto]=$row->total;
            }
            $data['like1']= $like;
        }else{
            $data['like1']=0;
        }

        $data['myuploads'] = $this->db->query("select * from foto where id_user='$id_' ORDER BY id_foto DESC");
        $data['myupload'] = $this->db->query("select * from foto");
        $data['like'] = $this->db->query("select count(id_user) from foto where id_user='$id_'");
        $data['dilike'] = $this->db->query("select * from foto, like_foto where like_foto.id_user='$id_' and like_foto.id_foto=foto.id_foto");
        $this->load->view('refre/user/profile',$data);
    }

    public function portfolio()
	{
        $query=$this->db->query("SELECT foto.`id_foto`,COUNT(l.id_like) as total FROM foto, `like_foto` l WHERE l.`id_foto`=foto.`id_foto` GROUP BY foto.id_foto");
        if(count($query->result())>0){
            foreach($query->result() as $row){
                $like[$row->id_foto]=$row->total;
            }
            $data['like1']= $like;
        }else{
            $data['like1']=0;
        }
        $data['myuploads'] = $this->db->query("select * from foto ORDER BY id_foto DESC");
		$this->load->view('refre/user/portfolio',$data);
    }

    public function refre_upload(){
        $this->load->view('refre/user/upload');
    }

    public function consult(){
        if($this->session->userdata('id_user')==NULL) redirect('http://refre.co');
        $data['kategori'] = $this->db->query("select * from category_chat");
        $this->load->view('refre/user/consult', $data);
    }

    public function chat(){
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("select id_chatroom from user where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $data['chatroom'] =  $this->db->query("select * from chatroom where id_chatroom = '$id_chatroom'");
        $this->db->reconnect();
        $data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        $this->db->reconnect();
        $data['chatroom'] = $this->db->query("select * from chatroom where id_chatroom = '$id_chatroom'");
        $this->db->reconnect();
        $data['now'] = $this->db->query("select now() as 'sekarang'");
        $this->load->view('refre/user/chat', $data);
    }

    public function consult_post(){
        $kategori=$this->input->post("kategori");
        $id_user = $this->session->userdata('id_user');
        $data = $this->db->query("call create_chatroom_user('$id_user','$kategori')");
        redirect('/refre/chat');
    }

    public function stylist(){
        $data['list_consult'] = $this->db->query("SELECT * FROM chatroom LEFT JOIN ((select nama_user, id_chatroom from user) m, category_chat )
                 ON (chatroom.id_chatroom=m.id_chatroom AND chatroom.id_category_chat=category_chat.id_category_chat) where fashion is null");
        $this->load->view('refre/stylist/index', $data);
    }

    public function chat_stylist(){
        $id_user = $this->session->userdata('id_stylist');
        $query = $this->db->query("select id_chatroom from stylist where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        $this->db->reconnect();
        $data['chatroom'] = $this->db->query("select * from chatroom where id_chatroom = '$id_chatroom'");
        $this->db->reconnect();
        $data['now'] = $this->db->query("select now() as 'sekarang'");
        $this->load->view('refre/stylist/chat', $data);
    }

    public function accept_chat($id_chatroom){
        $id_user = $this->session->userdata('id_stylist');
        $this->db->query("call accept_chat('$id_chatroom','$id_user')");
        redirect("/refre/chat_stylist");
    }
    
    public function history_chat($id_chatroom){
        $id_user = $this->session->userdata('id_stylist');
        $data['history']=$this->db->query("select id_chatroom, pesan, tipe_user from message where id_chatroom=$id_chatroom");
        $this->load->view('refre/stylist/chat_history', $data);
    }

    public function get_pesan(){
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("select id_chatroom from user where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $data =  $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        foreach ($data->result() as $key) {
            if($key->tipe_user=='fashion'){
                echo "<div class='bubble-container'>";
                echo "<div class='bubble-left'>".$key->pesan."</div></div>";
                
             }else{
                echo "<div class='bubble-container'>";
                echo "<div class='bubble-right'>".$key->pesan."</div></div>";
           }
        }
    }

    public function check_session(){
        echo $this->session->userdata('id_user');
    }

    public function get_pesan_fashion(){
        $id_user = $this->session->userdata('id_stylist');
        $query = $this->db->query("select id_chatroom from stylist where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $data =  $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        foreach ($data->result() as $key) {
            if($key->tipe_user!='fashion'){
                echo "<div class='bubble-container'>";
                echo "<div class='bubble-left'>".$key->pesan."</div></div>";
                
             }else{
                echo "<div class='bubble-container'>";
                echo "<div class='bubble-right'>".$key->pesan."</div></div>";
           }
        }
    }

    public function kirim_pesan_user(){
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("select id_chatroom from user where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $tipe_user =$this->input->post("tipe");
        $message = $this->input->post("msg");
        $this->db->query("insert into message(id_chatroom, pesan, id_user, tipe_user) values ('$id_chatroom', '$message', '$id_user', 'user')");
        $data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        $this->load->view('chat/user', $data);
    }

        public function kirim_pesan_stylist(){
        $id_user = $this->session->userdata('id_stylist');
        $query = $this->db->query("select id_chatroom from stylist where id_user = '$id_user'"); 
        $id_chatroom = "";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $tipe_user =$this->input->post("tipe");
        $message = $this->input->post("msg");
        $this->db->query("insert into message(id_chatroom, pesan, id_user, tipe_user) values ('$id_chatroom', '$message', '$id_user', 'fashion')");
        $data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
        $this->load->view('chat/user', $data);
    }

    public function check_chat(){
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("select id_chatroom from user where id_user = '$id_user'"); 
        $id_chatroom = "";
        $status="";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $this->db->reconnect();
        $data=$this->db->query("select * from chatroom where id_chatroom = '$id_chatroom'");

        foreach ($data->result() as $m) {
            $status = $m->fashion;
            if(!is_null($m->fashion)) 
                echo "1";
            else
                echo "0";
        }
    }

    public function end_chat_user(){
        $id_user = $this->session->userdata('id_user');
        $query = $this->db->query("select id_chatroom from user where id_user = '$id_user'"); 
        $id_chatroom = "";
        $status="";
        foreach ($query->result() as $key) {
            $id_chatroom = $key->id_chatroom;
        }
        $this->db->reconnect();
        $data=$this->db->query("update chatroom set waktu_akhir=now() where id_chatroom = '$id_chatroom'");
        redirect('/refre/refre_profile');
    }
}
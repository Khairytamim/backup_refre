<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDistro extends CI_Controller {

	private function get_session(){
		$user = array(
			'email_user' => $this->session->userdata('email_user'),
			'nama_user'=> $this->session->userdata('nama_user'),
			'id_too'=> $this->session->userdata('id_toko'),
			'logged_in' => FALSE,
		);
		return $user;
	}
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('email_user') == '' ||  $this->session->userdata('type_user') != 'admin_distro')
			{
				redirect('/Daftaradmin');
			}
                $this->load->model('Admindistro_model');
	}
	
	public function hapus_data($id_produk){
		
		$this->Admindistro_model->hapus_produk($id_produk);
		redirect('/adminDistro/daftar_produk');
	}
	
	public function hapus_cabang($id_cabang){
		$this->Admindistro_model->hapus_cabang($id_cabang);
		redirect('/adminDistro/daftar_cabang');
	}
	
	public function login(){
		$title['title']='Login Cabang / Admin Distro';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu');
		$this->load->view('adminaccount/login');
	}

	public function registration_cabang(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Emailtoko', 'trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
		$this->form_validation->set_rules('nama_penanggung_jawab', 'Namaowner', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nomor_telepon_penanggung_jawab', 'Nomor Telepon Penanggung Jawab', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[0-9]{6,32}$/]');
		$this->form_validation->set_rules('nomor_telepon_cabang', 'Nomor Telepon Cabang', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[0-9]{6,32}$/]');
		$this->form_validation->set_rules('alamat_cabang', 'Alamat Cabang', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('no_rekening', 'Nomor Rekening', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kode_pos', 'Kode POS', 'trim|required|xss_clean');
		$this->form_validation->set_rules('bank', 'Bank', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
			$this->tambah_cabang();
		}else{
			$this->user_model->add_toko_cabang();
			redirect('/AdminDistro/daftar_cabang');
		}
	}
	
	public function email_sudah_terpakai(){
		$this->load->model('user_model');
		$email=$this->input->post('email');
        	$result=$this->user_model->check_email_exist_toko_cabang($email);
        	if($result){
			$this->form_validation->set_message('email_checking', 'Email already exist.');
			return false;
		}else{
			return true;
		}
	}
	
	public function logout(){
		$newdata = array(
			'id_cabang' => '',
			'id_toko'   => '',
			'nama_user' => '',
			'type_user' => '',
			'email_user'=> '',
			'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/Daftaradmin', 'refresh');
	}



        public function gambar_produk_upload($id) {
                $id_toko = $this->session->userdata('id_toko');
                $id_produk = $this->Admindistro_model->get_id_produk_terakhir($id_toko);
                foreach ($id_produk ->result() as $row)
			{
				$id_produk = $row->id_produk;
			}
                $targetFile = '';
                $x = 0;
                $y = 0;
		if (!empty($_FILES)) {
		$tempFile = $_FILES['file']['tmp_name'];
                $imagedetails = getimagesize($_FILES['file']['tmp_name']);
                $lebar_lama= $imagedetails[0];
                $tinggi_lama= $imagedetails[1];
                $lebar= 0;
                $tinggi = 0;
                if($lebar_lama >= $tinggi_lama || tinggi_lama<1000){
                     $lebar = ($tinggi_lama/1000)*700;
                     $x = $x + ($lebar_lama/2)-($lebar/2);
                     $tinggi = $tinggi_lama;}
                 else {
                     $tinggi=($lebar_lama/700)*1000; 
                     $y = $y + ($tinggi_lama/2)-($tinggi/2); 
                     $lebar= $lebar_lama;}


		$targetPath = getcwd() . '/assets/gambar_kaos/big/'.$id.'/';
		$targetFile = $targetPath . $id_produk.".jpg";
		move_uploaded_file($tempFile, $targetFile);
		}


                $mama['image_library'] =  'gd2';
	        $mama['source_image']    =  $targetFile;
                $mama['maintain_ratio'] = FALSE;
                $mama['width']  =$lebar;
                $mama['height'] = $tinggi;
		$mama['x_axis'] = $x;
                $mama['y_axis'] = $y;
                $mama['overwrite'] = TRUE; 
 		
                $this->load->library('image_lib', $mama);

		if ( ! $this->image_lib->crop())
		{
        	echo $this->image_lib->display_errors();
		}

                
    	        $lala['image_library'] = 'gd2';
	        $lala['source_image']    =  $targetFile;
		$lala['new_image'] = './assets/gambar_kaos/small/'.$id;
		$lala['maintain_ratio'] = TRUE;
		$lala['width']         = 350;
                $lala['height']         = 500;
                $lala['overwrite'] = TRUE; 
                
                $this->image_lib->clear();
                $this->image_lib->initialize($lala);
                $this->load->library('image_lib', $lala);

		if ( ! $this->image_lib->resize())
		{
        	echo $this->image_lib->display_errors();
		}
		
		$sasa['image_library'] = 'gd2';
	        $sasa['source_image']    =  $targetFile;
		$sasa['new_image'] = './assets/gambar_kaos/xsmall/'.$id;
		$sasa['maintain_ratio'] = TRUE;
		$sasa['width']         = 40;
                $sasa['overwrite'] = TRUE; 
                
                $this->image_lib->clear();
                $this->image_lib->initialize($sasa);
                $this->load->library('image_lib', $sasa);

		if ( ! $this->image_lib->resize())
		{
        	echo $this->image_lib->display_errors();
		}
	}
		
	public function gambar_produk_upload_edit($id_produk,$id) {
                $id_toko = $this->session->userdata('id_toko');

                $targetFile = '';
                $x = 0;
                $y = 0;
		if (!empty($_FILES)) {
		$tempFile = $_FILES['file']['tmp_name'];
		//$fileName = $_FILES['file']['name'];
                $imagedetails = getimagesize($_FILES['file']['tmp_name']);
                $lebar_lama= $imagedetails[0];
                $tinggi_lama= $imagedetails[1];
                $lebar= 0;
                $tinggi = 0;
                if($lebar_lama >= $tinggi_lama || tinggi_lama<1000){
                     $lebar = ($tinggi_lama/1000)*700;
                     $x = $x + ($lebar_lama/2)-($lebar/2);
                     $tinggi = $tinggi_lama;}
                 else {
                     $tinggi=($lebar_lama/700)*1000; 
                     $y = $y + ($tinggi_lama/2)-($tinggi/2); 
                     $lebar= $lebar_lama;}


		$targetPath = getcwd() . '/assets/gambar_kaos/big/'.$id.'/';
		$targetFile = $targetPath . $id_produk.".jpg";
		move_uploaded_file($tempFile, $targetFile);
		}


                $mama['image_library'] =  'gd2';
	        $mama['source_image']    =  $targetFile;
                $mama['maintain_ratio'] = FALSE;
                $mama['width']  =$lebar;
                $mama['height'] = $tinggi;
		$mama['x_axis'] = $x;
                $mama['y_axis'] = $y;
                $mama['overwrite'] = TRUE; 
 		
                $this->load->library('image_lib', $mama);

		if ( ! $this->image_lib->crop())
		{
        	echo $this->image_lib->display_errors();
		}

                
    	        $lala['image_library'] = 'gd2';
	        $lala['source_image']    =  $targetFile;
		$lala['new_image'] = './assets/gambar_kaos/small/'.$id;
		$lala['maintain_ratio'] = TRUE;
		$lala['width']         = 350;
                $lala['height']         = 500;
                $lala['overwrite'] = TRUE; 
                
                $this->image_lib->clear();
                $this->image_lib->initialize($lala);
                $this->load->library('image_lib', $lala);

		if ( ! $this->image_lib->resize())
		{
        	echo $this->image_lib->display_errors();
		}
		
		$sasa['image_library'] = 'gd2';
	        $sasa['source_image']    =  $targetFile;
		$sasa['new_image'] = './assets/gambar_kaos/xsmall/'.$id;
		$sasa['maintain_ratio'] = TRUE;
		$sasa['width']         = 40;
                $sasa['overwrite'] = TRUE; 
                
                $this->image_lib->clear();
                $this->image_lib->initialize($sasa);
                $this->load->library('image_lib', $sasa);

		if ( ! $this->image_lib->resize())
		{
        	echo $this->image_lib->display_errors();
		}
	}
	
	
	public function edit_logo(){
		$id_toko = $this->session->userdata('id_user');
		$config['upload_path'] = './assets/img/logo_brand/';
		$config['file_name']=$id_toko.'.jpg';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['max_size']	= '2000';
		$config['overwrite'] = TRUE; 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->pengaturan_toko_error($error);
		}
		else
		{
			$data = $this->upload->data();
			$sasa['image_library'] = 'gd2';
		        $sasa['source_image']    =   $data['full_path'];
			$sasa['new_image'] = './assets/img/logo_brand_mini/'.$id_toko.'.jpg';
			$sasa['file_name']=$id_toko.'.jpg';
			$sasa['maintain_ratio'] = TRUE;
			$sasa['width']         = 128;
			$sasa['height']= 128;
	                $sasa['overwrite'] = TRUE;
	                $this->load->library('image_lib', $sasa);
			$this->image_lib->resize();
		}
	}

        public function edit_pembayaran_submit(){
		$id_toko = $this->session->userdata('id_toko');
		$nomor_rekening = $this->input->post('norek');
		$option= $this->input->post('opsi');
		$bank= $this->input->post('bank');
		$this->Admindistro_model->edit_pembayaran($id_toko, $nomor_rekening, $option, $bank);
		redirect('/adminDistro/pengaturan_toko');
	}
	
	public function edit_pembayaran_cabang(){
		$id_cabang = $this->session->userdata('id_cabang');
		$nomor_rekening = $this->input->post('norek');
		$option= $this->input->post('opsi');
		$bank= $this->input->post('bank');
		$this->Admindistro_model->edit_pembayaran($id_cabang, $nomor_rekening, $option, $bank);
		redirect('/adminDistro/
		_cabang');
	}

        public function tambah_produk_submit()
        {
          	$this->load->helper('security');
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
		$this->form_validation->set_rules('type', 'Kategori Produk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('type1', 'SubKategori Produk', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('berat', 'Berat', 'trim|required|regex_match[/^[0-9,]{0,32}$/]');
		//$this->form_validation->set_rules('harga', 'Harga', 'trim|required|regex_match[/^[0-9,]{0,32}$/]');
		if($this->form_validation->run() == FALSE){
			$this->tambah_produk();
		}else{
			$this->Admindistro_model->tambah_produk();
			redirect('/AdminDistro/tambah_produk_sukses');
		}
        }
        
        
        public function simpan_produk_submit($id_produk){
          	$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('deskripsi_produk', 'Deskripsi Produk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
		$this->form_validation->set_rules('berat', 'Berat', 'trim|required|regex_match[/^[0-9,]{0,32}$/]');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required|regex_match[/^[0-9,]{0,32}$/]');
		if($this->form_validation->run() == FALSE){
			$this->edit_produk($id_produk);
		}else{
			$this->Admindistro_model->simpan_produk($id_produk);
			redirect('/AdminDistro/daftar_produk');
		}
        }
	
	public function index()
	{
		$user = $this->get_session();
		$data['error']='';
                $id_toko = $this->session->userdata('id_toko');
                $data['info_toko'] = $this->Admindistro_model->get_info_toko($id_toko);
		$title['title']='Pengaturan Toko / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/pengaturan_toko', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function tambah_produk()
	{
		$user = $this->get_session();
		$data['kategori'] = $this->Admindistro_model->show_kategori();
        $data['personality'] = $this->Admindistro_model->show_personality();
		$title['title']='Tambah Produk / Admin Distro';
		$this->load->view('header/header_admin_distro',$title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/index', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function subcategory(){
		$id=$this->input->post('categoryId');
		$data['kategori'] = $this->Admindistro_model->show_subcategory($id);
		$this->load->view('admin_distro/subcategory', $data);
	}
	
	public function ukuran(){
		$id=$this->input->post('ukuranId');
		$type = $this->Admindistro_model->show_tipe_subcategory($id);
		foreach($type->result() as $row){
			$data['type']=$row->tipe;
		}
		$this->load->view('admin_distro/size', $data);
	}
	
	public function tambah_produk_sukses(){
		$user = $this->get_session();
		$data['kategori'] = $this->Admindistro_model->show_kategori();
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/tambah_produk_sukses', $data);
		$this->load->view('footer/footerbar');
	}
	
	
	
	public function daftar_produk(){
		$user = $this->get_session();
        $id_toko = $this->session->userdata('id_toko');
        $data['produk'] = $this->Admindistro_model->get_produk_saya($id_toko);
        $title['title']='Daftar Produk / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/daftar_produk', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function daftar_cabang(){
		$user = $this->get_session();
                $id_toko = $this->session->userdata('id_toko');
                $data['cabang'] = $this->Admindistro_model->get_cabang_saya($id_toko);
		$title['title']='Daftar Cabang / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/daftar_cabang',$data);
		$this->load->view('footer/footerbar');
	}
	
	
	public function pesan(){
		$user = $this->get_session();
                $id_toko = $this->session->userdata('id_toko');
		$data['pesan'] = $this->Admindistro_model->daftar_pesan($id_toko);
		$title['title']='Pesan / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);;
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/pesan',$data);
		$this->load->view('footer/footerbar');
	}
	
	public function pengaturan_toko(){
		$user = $this->get_session();
		$data['error']='';
                $id_toko = $this->session->userdata('id_toko');
                $data['info_toko'] = $this->Admindistro_model->get_info_toko($id_toko);
		$title['title']='Pengaturan Toko / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/pengaturan_toko', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function pengaturan_toko_error($error){
		$user = $this->get_session();
                $id_toko = $this->session->userdata('id_toko');
                $data['info_toko'] = $this->Admindistro_model->get_info_toko($id_toko);
                $data['error']=$error;
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/pengaturan_toko', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function tambah_cabang(){
		$user = $this->get_session();
                $id_toko = $this->session->userdata('id_toko');
                $data['info_toko'] = $this->Admindistro_model->get_info_toko($id_toko);
		$title['title']='Tambah Cabang / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/tambah_cabang', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function edit_produk($id_produk){
		$user = $this->get_session();
		$id_toko = $this->session->userdata('id_toko');
		$tipe= $this->Admindistro_model->show_tipe_from_pk_kategory($id_produk);
		foreach($tipe->result() as $row){
			$data['type']=$row->tipe;
			$tipe = $row->tipe;;
		}
		if($tipe==0){
			$ukuran= $this->Admindistro_model->show_ukuran_nol($id_produk);
			foreach($ukuran->result() as $row){
				$data['item']['1'] = $row->ukuran; 
			}
		}else if($tipe==1){
			$ukuran= $this->Admindistro_model->show_ukuran_satu($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['1'] = $row->c1; 
				$data['item1']['2'] = $row->c2; 
				$data['item1']['3'] = $row->c3; 
				$data['item1']['4'] = $row->c4; 
				$data['item1']['5'] = $row->c5; 
				$data['item1']['6'] = $row->c6; 
				
				$data['item2']['1'] = $row->l1; 
				$data['item2']['2'] = $row->l2; 
				$data['item2']['3'] = $row->l3; 
				$data['item2']['4'] = $row->l4; 
				$data['item2']['5'] = $row->l5; 
				$data['item2']['6'] = $row->l6; 
				
				$data['item3']['1'] = $row->s1; 
				$data['item3']['2'] = $row->s2; 
				$data['item3']['3'] = $row->s3; 
				$data['item3']['4'] = $row->s4; 
				$data['item3']['5'] = $row->s5; 
				$data['item3']['6'] = $row->s6; 
			}
		}else if($tipe==2){
			$ukuran= $this->Admindistro_model->show_ukuran_dua($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['36'] = $row->u36; 
				$data['item1']['37'] = $row->u37; 
				$data['item1']['38'] = $row->u38; 
				$data['item1']['39'] = $row->u39; 
				$data['item1']['40'] = $row->u40; 
				$data['item1']['41'] = $row->u41;
				$data['item1']['42'] = $row->u42; 
				$data['item1']['43'] = $row->u43; 
				$data['item1']['44'] = $row->u44; 
				$data['item1']['45'] = $row->u45; 
				$data['item1']['46'] = $row->u46; 
				$data['item1']['47'] = $row->u47;
			}
		}else if($tipe==3){
			$ukuran= $this->Admindistro_model->show_ukuran_tiga($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['27'] = $row->i27; 
				$data['item1']['28'] = $row->i28; 
				$data['item1']['29'] = $row->i29; 
				$data['item1']['30'] = $row->i30; 
				$data['item1']['31'] = $row->i31; 
				$data['item1']['32'] = $row->i32; 
				$data['item1']['33'] = $row->i33; 
				$data['item1']['34'] = $row->i34; 
				$data['item1']['35'] = $row->i35; 
				$data['item1']['36'] = $row->i36; 
				$data['item1']['37'] = $row->i37; 
				$data['item1']['38'] = $row->i38; 
				
				
				$data['item2']['27'] = $row->w27; 
				$data['item2']['28'] = $row->w28; 
				$data['item2']['29'] = $row->w29; 
				$data['item2']['30'] = $row->w30; 
				$data['item2']['31'] = $row->w31; 
				$data['item2']['32'] = $row->w32; 
				$data['item2']['33'] = $row->w33; 
				$data['item2']['34'] = $row->w34; 
				$data['item2']['35'] = $row->w35; 
				$data['item2']['36'] = $row->w36; 
				$data['item2']['37'] = $row->w37; 
				$data['item2']['38'] = $row->w38; 
				
				
				$data['item3']['27'] = $row->h27; 
				$data['item3']['28'] = $row->h28; 
				$data['item3']['29'] = $row->h29; 
				$data['item3']['30'] = $row->h30; 
				$data['item3']['31'] = $row->h31; 
				$data['item3']['32'] = $row->h32; 
				$data['item3']['33'] = $row->h33; 
				$data['item3']['34'] = $row->h34; 
				$data['item3']['35'] = $row->h35; 
				$data['item3']['36'] = $row->h36; 
				$data['item3']['37'] = $row->h37; 
				$data['item3']['38'] = $row->h38; 
				
				$data['item4']['27'] = $row->t27; 
				$data['item4']['28'] = $row->t28; 
				$data['item4']['29'] = $row->t29; 
				$data['item4']['30'] = $row->t30; 
				$data['item4']['31'] = $row->t31; 
				$data['item4']['32'] = $row->t32; 
				$data['item4']['33'] = $row->t33; 
				$data['item4']['34'] = $row->t34; 
				$data['item4']['35'] = $row->t35; 
				$data['item4']['36'] = $row->t36; 
				$data['item4']['37'] = $row->t37; 
				$data['item4']['38'] = $row->t38;
			}
		}
		$ukuran=$this->input->post('ukuran');
		$data['produk'] = $this->Admindistro_model->edit_produk($id_produk , $id_toko);
        $this->db->reconnect();
        $data['personality'] = $this->Admindistro_model->show_personality();
		$title['title']='Edit Produk / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_distro/sidenav', $user);
		$this->load->view('admin_distro/edit_produk', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function simpan_pengaturan_toko_post(){
		/*$nama_toko = $this->input->post('nama_toko');
		$nama_owner= $this->input->post('nama_owner');
		$nohp_toko = $this->input->post('nohp_toko');
		$nomor_teleponowner= $this->input->post('nomor_teleponowner');
		$website = $this->input->post('website');
		$alamat_toko= $this->input->post('alamat_toko');
		$email_toko= $this->session->userdata('email_user');
		$this->Admindistro_model->simpan_pengaturan_toko($nama_toko, $nama_owner, $nohp_toko,
$nomor_teleponowner, $website, $alamat_toko, $email_toko);*/
		$this->edit_logo();
		redirect('/refre/refre_profile');
	}
}
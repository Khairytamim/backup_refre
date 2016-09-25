<?php defined('BASEPATH') OR exit('No direct script access allowed');
class AdminCabang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if($this->session->userdata('email_user') == '' || $this->session->userdata('type_user') != 'admin_cabang')
			{
				redirect('/daftaradmin');
			}
                $this->load->model('Admincabang_model');
	}
	
	public function get_session_data(){
		$user = array(
			'id_cabang' => $this->session->userdata('id_cabang'),
			'email_user' => $this->session->userdata('email_user'),
			'nama_user'=> $this->session->userdata('nama_user'),
			'id_too'=> $this->session->userdata('id_toko'),
			'logged_in' => FALSE,
		);
		return $user;
	}
	
	public function login(){
		$title['title']='Login Cabang / Admin Distro';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu');
		$this->load->view('adminaccount/login');
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
		redirect('/home');
	}


        public function edit_pembayaran_submit(){
		$id_cabang = $this->session->userdata('id_cabang');
		$nomor_rekening = $this->input->post('norek');
		$bank= $this->input->post('bank');
		$this->Admincabang_model->edit_pembayaran($id_cabang, $nomor_rekening, $bank);
		redirect('/adminCabang/pengaturan_toko');
	}


	public function index(){	
		$user = $this->get_session_data();
		$data['error']='';
                $id_cabang= $this->session->userdata('id_cabang');
                $data['info_toko'] = $this->Admincabang_model->get_info_cabang($id_cabang);
                $title['title']='Pengaturan Cabang / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pengaturan_cabang', $data);
		$this->load->view('footer/footerbar');
	}
	
	
	public function daftar_produk(){
                
		$user = $this->get_session_data();
                $id_toko = $this->session->userdata('id_toko');
                $email = $this->session->userdata('email_user');
                $data['produk'] = $this->Admincabang_model->get_produk_saya($id_toko,$email);
		$title['title']='Daftar Produk / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/daftar_produk', $data);
		$this->load->view('footer/footerbar');
	}

	
    public function produk()
	{
		$user = $this->get_session_data();
        $id_cabang = $this->session->userdata('id_cabang');
		$title['title']='Pesan Cabang / Admin Distro';
        $data['pesan'] = $this->Admincabang_model->daftar_pesan_toko($id_cabang);
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pesanan_produk', $data);
		$this->load->view('footer/footerbar');
	}
    
	public function pesan()
	{
		$user = $this->get_session_data();
        $id_cabang = $this->session->userdata('id_cabang');
		$title['title']='Pesan Cabang / Admin Distro';
        $data['pesan'] = $this->Admincabang_model->daftar_pesan_toko($id_cabang);
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pesan_cabang', $data);
		$this->load->view('footer/footerbar');
	}


	
	public function pengaturan_toko()
	{
		$user = $this->get_session_data();
		$data['error']='';
                $id_toko = $this->session->userdata('id_cabang');
                $data['info_toko'] = $this->Admincabang_model->get_info_cabang($id_toko);
		$title['title']='Pengaturan Cabang / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pengaturan_cabang', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function pengaturan_toko_error($error)
	{
		$user = $this->get_session_data();
                $id_toko = $this->session->userdata('id_cabang');
                $data['info_toko'] = $this->Admincabang_model->get_info_cabang($id_toko);
                $data['error']=$error;
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pengaturan_cabang', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function simpan_jumlah_produk($id_produk)
	{
		$id_toko = $this->session->userdata('id_cabang');
		$this->Admincabang_model->simpan_jumlah_produk($id_produk , $id_toko);
		redirect("/AdminCabang/edit_produk/".$id_produk);
	}
	
	public function edit_produk($id_produk)
	{
		$user = $this->get_session_data();
		$tipe = $this->Admincabang_model->show_tipe_from_pk_kategory($id_produk);
		foreach($tipe->result() as $row){
			$data['type']=$row->tipe;
		}
		$data['id_produk']=$id_produk;
		$id_toko = $this->session->userdata('id_cabang');
		$produk = $this->Admincabang_model->select_jml_produk($id_produk , $id_toko);
		foreach($produk->result() as $row){
			$data['item']['1'] = $row->u1; 
			$data['item']['2'] = $row->u2;
			$data['item']['3'] = $row->u3; 
			$data['item']['4'] = $row->u4; 
			$data['item']['5'] = $row->u5; 
			$data['item']['6'] = $row->u6; 
			$data['item']['7'] = $row->u7; 
			$data['item']['8'] = $row->u8; 
			$data['item']['9'] = $row->u9; 
			$data['item']['10'] = $row->u10; 
			$data['item']['11'] = $row->u11; 
			$data['item']['12'] = $row->u12;  
		}
		$title['title']='Edit Produk / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/edit_jumlah', $data);
		$this->load->view('footer/footerbar');
	}
	
	public function pemesanan()
	{
		/*$data['pemesanan'] = $this->Admincabang_model->pemesanan();*/
        $user = $this->get_session_data();
        $id_cabang = $this->session->userdata('id_cabang');
        $data['pemesanan'] = $this->Admincabang_model->daftar_pemesanan_toko($id_cabang,0);
        $data['pemesanan1'] = $this->Admincabang_model->daftar_pemesanan_toko($id_cabang,1);
//        var_dump($data['pemesanan']);
		$title['title']='Pesan Cabang / Admin Distro';
		$this->load->view('header/header_admin_distro', $title);
		$this->load->view('navbar/admin_distro');
		$this->load->view('admin_cabang/sidenav', $user);
		$this->load->view('admin_cabang/pemesanan', $data);
		$this->load->view('footer/footerbar');
	}

	public function update_resi($id)
	{
		$nomor_resi=$this->input->post('no_resi');
		$this->Admincabang_model->update_resi($id,$nomor_resi);
		redirect('/adminCabang/pemesanan');
	}
}
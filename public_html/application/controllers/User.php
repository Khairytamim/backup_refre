<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
	        parent::__construct();
	        $this->load->model('Home_model');
	        $this->load->model('User_model');
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
		$this->load->view('navbar/no_menu',$data);
		if($status == 1){
		$this->session->userdata('id_user');
		$detail['id_kota_asal'] = $this->User_model->get_id_kota();
		$this->load->view('home/controlpanel',$detail);
		}
		$this->load->view('footer/footerbar');
	}
	
	public function veralamat()
	{
		$status = 0;
		$cek_alamat = $this->User_model->cek_alamat();
		foreach($cek_alamat->result() as $row){
			$status = $row->status;
		}
		$data['brand'] = $this->Home_model->show_brand();
		if($status == 1){
			$detail['id_kota_asal'] = $this->User_model->get_id_kota();
	        $detail['data']= $this->User_model->get_akun_data();
			$this->load->view('header/header_1');
			$this->load->view('navbar/no_menu',$data);
			$this->load->view('home/input_alamat',$detail);
			$this->load->view('footer/footerbar');
		}else{
			$detail['id_kota_asal'] = $this->User_model->get_id_kota();
	        $detail['data']= $this->User_model->get_akun_data();
			$this->load->view('header/header_1');
			$this->load->view('navbar/no_menu',$data);
			$this->load->view('home/input_alamat',$detail);
			$this->load->view('footer/footerbar');
		}
	}
    
    public function confirm()
    {
        $data['brand'] = $this->Home_model->show_brand();
        $this->db->reconnect();
        $data['confirm'] = $this->User_model->cekdata();
        $this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('home/confirm',$data);
		$this->load->view('footer/footerbar');
    }
    
     public function profile()
    {
        $this->load->view('header/header_refre');
		$this->load->view('user/profile');
    }
     public function consult()
    {
        $this->load->view('header/header_refre');
		$this->load->view('user/consult');
    }
     public function collectiondetail()
    {
        $this->load->view('header/header_refre');
		$this->load->view('user/collection-detail');
    }
     public function chat()
    {
        $this->load->view('header/header_refre');
		$this->load->view('user/chat');
    }	
    
	public function profil()
	{
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/profil');
		$this->load->view('footer/footerbar');
	}
	
	public function login()
	{
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/login');
		$this->load->view('footer/footerbar');
	}
	
	public function status()
	{
		$id_user = $this->session->userdata('id_user');
		$data['pemesanan'] = $this->Home_model->daftar_pemesanan_user($id_user);
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/status');
		$this->load->view('footer/footerbar');
	}
	
    public function alamat_payment(){
		$this->User_model->alamat_payment(); 
		redirect('/user/veralamat');
	}
    
	public function simpan_alamat(){
		$this->User_model->simpan_alamat(); 
		redirect('/user/controlpanel');
	}
	
    public function update_akun(){
		$this->User_model->update_akun(); 
		redirect('/user/controlpanel');
	}
    
	public function pre_pembayaran(){
		$title['title']='Cart / cari dan buat gayamu';
		$data['brand'] = $this->Home_model->show_brand();
		$detail['akun'] = $this->User_model->get_akun_data();
		$detail['id_kota_asal'] = $this->User_model->get_id_kota();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/pre_pembayaran',$detail);
		$this->load->view('footer/footerbar');
	}

	public function cart(){
		$this->User_model->tambah_billing();
		redirect('/brands/pembayaran');
	}
    
    public function transfer(){
		$this->User_model->tambah_billing();
		redirect('/user/confirm');
	}
	
}
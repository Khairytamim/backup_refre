<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Home_model');
    }
    
    	public function index()
	{
		
		$title['title']='Cart / cari dan buat gayamu';
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('home/cart');
		$this->load->view('footer/footerbar');
	}
	
        public function payment()
	{
		$id_user = $this->session->userdata('id_user');
        if($id_user==null){
		$title['title']='Cart / cari dan buat gayamu';
		$data['brand'] = $this->Home_model->show_brand();
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/payment');
		$this->load->view('footer/footerbar');
        }
        else{
            redirect('/user/veralamat');
        }
	}
	
	public function pesan($id_produk)
	{
		$data['produk'] = $this->Transaksi_model->detail_produk($id_produk);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Cart / cari dan buat gayamu';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('user/cart',$data);
		$this->load->view('footer/footerbar');
	}

	public function verifikasi_email_user()
	{
		$this->load->view('header/header_1');
		$this->load->view('user/verifikasi_email_user');
	}
	
        public function tambah_transaksi_submit()
        {
          	$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_transaksi', 'Nama Produk', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kode_pos_transaksi', 'Kode Pos Transaksi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kota_transaksi', 'Kota Transaksi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat_transaksi', 'Alamat Transaksi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('kontak_transaksi', 'Kontak Transaksi', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_transaksi', 'Email Transaksi', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE){
			redirect('/home');
		}else{
			$this->Transaksi_model->tambah();
			$this->verifikasi_email_user();
		}

        }
        public function input_transaksi($auth)
	{
		$hasil=$this->db->query("call tambah_transaksi_trial('$nama', '$alamat', '$kontak','$ukuran','$harga','$produk','$email','$provinsi','$kota')");
	}
}
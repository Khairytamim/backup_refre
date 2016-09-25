<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogue extends CI_Controller {
	public function index()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('catalogue/index');
	}
	
	public function detail($id, $nama_produk)
	{
		$this->load->model('Catalogue_model');
		$hasil['produk'] = $this->Catalogue_model->detail_produk($id);
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('brands/index', $hasil);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->model('Home_model');
    	}

	public function accessories($produk_kategori = null) {
	     if (!empty($produk_kategori)) {
	        $data['data'] = $this->Home_model->show_subcategory(1);
         	$this->db->reconnect();
	        $data['produk'] = $this->Home_model->list_produk_percategory($produk_kategori);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
         	$data['category']='accessories';
		$title['title']='Subcategory / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu', $data);
		$this->load->view('sidenav/index', $data);
		$this->load->view('categories/subcategory', $data);
		$this->load->view('footer/footerbar');
	     } else {
		$category['data'] = $this->Home_model->show_subcategory(1);
         	$this->db->reconnect();
         	$category['brand'] = $this->Home_model->show_brand();
         	$this->db->reconnect();
         	$category['produk'] = $this->Home_model->list_produk_category(1,7);
         	$category['category']='accessories';
		$title['title']='Accessories / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu', $category);
		$this->load->view('sidenav/index', $category);
		$this->load->view('categories/categories');
		$this->load->view('footer/footerbar');	
	     }
	}
	
	public function outwears($produk_kategori = null) {
	     if (!empty($produk_kategori)) {
	        $data['data'] = $this->Home_model->show_subcategory(2);
         	$this->db->reconnect();
	        $data['produk'] = $this->Home_model->list_produk_percategory($produk_kategori);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
         	//$this->db->reconnect();
         	//$data['subcategory'] = $this->Home_model->nama_subcategory($produk_kategori);
         	$data['category']='outwears';
		$title['title']='Subcategory / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu', $data);
		$this->load->view('sidenav/index', $data);
		$this->load->view('categories/subcategory', $data);
		$this->load->view('footer/footerbar');
	     } else {
		$category['data'] = $this->Home_model->show_subcategory(2);
         	$this->db->reconnect();
         	$category['brand'] = $this->Home_model->show_brand();
         	$this->db->reconnect();
         	$category['produk'] = $this->Home_model->list_produk_category(8,13);
         	$category['category']='outwears';
		$title['title']='Outwears / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu', $category);
		$this->load->view('sidenav/index', $category);
		$this->load->view('categories/categories');
		$this->load->view('footer/footerbar');	
	     }
	}
	
	public function tops($produk_kategori = null) {
	     if (!empty($produk_kategori)) {
	        $data['data'] = $this->Home_model->show_subcategory(3);
         	$this->db->reconnect();
	        $data['produk'] = $this->Home_model->list_produk_percategory($produk_kategori);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
         	$data['category']='tops';
		$title['title']='Subcategory / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title); 
		$this->load->view('navbar/no_menu', $data);
		$this->load->view('sidenav/index', $data);
		$this->load->view('categories/subcategory', $data);
		$this->load->view('footer/footerbar');
	     } else {
		$category['data'] = $this->Home_model->show_subcategory(3);
         	$this->db->reconnect();
         	$category['brand'] = $this->Home_model->show_brand();
         	$this->db->reconnect();
         	$category['produk'] = $this->Home_model->list_produk_category(14,18);
		$category['category']='tops';
		$title['title']='Tops / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu', $category);
		$this->load->view('sidenav/index', $category);
		$this->load->view('categories/categories');
		$this->load->view('footer/footerbar');	
	     }
	}

	public function bottoms($produk_kategori = null) {
	     if (!empty($produk_kategori)) {
	        $data['data'] = $this->Home_model->show_subcategory(4);
         	$this->db->reconnect();
	        $data['produk'] = $this->Home_model->list_produk_percategory($produk_kategori);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
         	$data['category']='bottoms';
		$title['title']='Subcategory / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu', $data);
		$this->load->view('sidenav/index', $data);
		$this->load->view('categories/subcategory', $data);
		$this->load->view('footer/footerbar');
	     } else {
		$category['data'] = $this->Home_model->show_subcategory(4);
         	$this->db->reconnect();
         	$category['brand'] = $this->Home_model->show_brand();
         	$this->db->reconnect();
         	$category['produk'] = $this->Home_model->list_produk_category(19,22);
		$category['category']='bottoms';
		$title['title']='Bottoms / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu', $category);
		$this->load->view('sidenav/index', $category);
		$this->load->view('categories/categories');
		$this->load->view('footer/footerbar');	
	     }
	}
	
	public function footwears($produk_kategori = null) {
	     if (!empty($produk_kategori)) {
	        $data['data'] = $this->Home_model->show_subcategory(5);
         	$this->db->reconnect();
	        $data['produk'] = $this->Home_model->list_produk_percategory($produk_kategori);
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
         	$data['category']='footwears';
		$title['title']='Subcategory / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu', $data);
		$this->load->view('sidenav/index', $data);
		$this->load->view('categories/subcategory', $data);
		$this->load->view('footer/footerbar');
	     } else {
		$category['data'] = $this->Home_model->show_subcategory(5);
         	$this->db->reconnect();
         	$category['brand'] = $this->Home_model->show_brand();
         	$this->db->reconnect();
         	$category['produk'] = $this->Home_model->list_produk_category(23,25);
		$category['category']='footwears';
		$title['title']='Footwears / séve';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu', $category);
		$this->load->view('sidenav/index', $category);
		$this->load->view('categories/categories');
		$this->load->view('footer/footerbar');	
	     }
	}
		
}
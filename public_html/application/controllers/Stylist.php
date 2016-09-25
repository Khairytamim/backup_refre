<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stylist extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('header/header_refre');
		$this->load->view('stylist/index');
	}
    public function chat()
	{
		$this->load->view('header/header_refre');
		$this->load->view('stylist/chat');
	}
}

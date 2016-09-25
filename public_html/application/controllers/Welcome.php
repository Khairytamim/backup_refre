<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('header/header_2');
		$this->load->view('welcome');
	}
}

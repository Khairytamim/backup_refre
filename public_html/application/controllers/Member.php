<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('account/index');
	}
	
	public function login()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('account/login');
	}
	
	public function verifikasi_email()
	{
		$this->load->view('header/header_1');
		$this->load->view('navbar/no_menu');
		$this->load->view('account/verifikasi_email');
	}
	
	public function registration(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
		$this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[0-9]{6,32}$/]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$this->user_model->add_user();
			$this->verifikasi_email();
		}
	}
	
	public function verifikasi_login(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			$result=$this->user_model->login($email,$password);
			if($result) redirect('/AdminDistro');
			else redirect('/login/gagal');
		}	
	}
	
	
	public function logout()
	{
		$newdata = array(
		'email_user' => '',
		'nama_user' => '',
		'password_user'=>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/home');
	}
	
	public function email_sudah_terpakai()
	{
		$email=$this->input->post('email');
        	$result=$this->user_model->check_email_exist($email);
        	if($result){
			$this->form_validation->set_message('email_checking', 'Email already exist.');
			return false;
		}else{
			return true;
		}
	}
}

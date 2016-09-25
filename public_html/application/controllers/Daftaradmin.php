<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftaradmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
                $this->load->model('Admindistro_model');
                $this->load->model('Admincabang_model');
	}
	
	public function index()
	{
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/navbar_login');
		$this->load->view('adminaccount/index');
		$this->load->view('refre/parts/footer');
	}
	
	
	public function login()
	{
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/navbar_login');
		$this->load->view('adminaccount/login');
	}
	
	
	public function verifikasi_email()
	{
		$this->load->view('header/header_admin_distro');
		
		$this->load->view('adminaccount/verifikasi_email');
	}
	
	public function registration(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namatoko', 'Namatoko', 'trim|required|xss_clean');
		$this->form_validation->set_rules('emailtoko', 'Emailtoko', 'trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
		$this->form_validation->set_rules('namaowner', 'Namaowner', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nomor_teleponowner', 'Nomor_teleponowner', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[0-9]{6,32}$/]');
		$this->form_validation->set_rules('website', 'Website', 'trim|required|xss_clean');
		$this->form_validation->set_rules('nomor_telepontoko', 'Nomor_telepontoko', 'trim|required|xss_clean');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$this->user_model->add_toko();
			$this->verifikasi_email();
		}
	}
	

	
	public function verifikasi_login(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailtoko', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$emailtoko=$this->input->post('emailtoko');
			$password=$this->input->post('password');

			$result=$this->Admindistro_model->login($emailtoko,$password);
			if($result) redirect('/AdminDistro');
			else {redirect('/daftaradmin');}
		}	
	}
	
	public function verifikasi_login_cabang(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailtoko', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->login();
		}else{
			$emailtoko=$this->input->post('emailtoko');
			$password=$this->input->post('password');

			$result=$this->Admincabang_model->login($emailtoko,$password);
			if($result) redirect('/AdminCabang');
			else redirect('/daftaradmin');
		}	
	}
	
	
	public function logout()
	{
		$newdata = array(
		'email_user' => '',
		'nama_user' => '',
		'password_user'=>'',
		'type_user'=>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/home');
	}
	
	public function email_sudah_terpakai()
	{
		$emailtoko=$this->input->post('emailtoko');
        	$result=$this->user_model->check_email_exist_toko($emailtoko);
        	if($result){
			$this->form_validation->set_message('email_checking', 'Email already exist.');
			return false;
		}else{
			return true;
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Useragreement extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function verif($auth)
	{
		$data['auth'] = $auth;
		$this->load->view('header/header_admin_distro');
		$this->load->view('navbar/admin_distro');
                $this->load->view('user/user_agreement', $data);
                
	}
}
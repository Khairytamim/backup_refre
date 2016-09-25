<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comingsoon extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('prelaunch/index');
	}
    public function firstuser()
	{
		$this->load->helper('security');
		$this->load->library('form_validation');
		$emailuser=$this->input->post('emailuser');
        $this->db->query("insert into user (email_user) values ('$emailuser')");
        redirect('/comingsoon');
        
	}
}
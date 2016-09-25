<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function track($origin,$destination,$weight)
	{
		$data['origin']=$origin;
		$data['destination']=$destination;
		$data['weight']=$weight;
		$this->load->view('pembayaran/ongkir',$data);
	}
	
	public function search()
	{
		$this->load->view('pembayaran/search');
	}
}
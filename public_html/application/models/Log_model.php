<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
    
	public function __construct()
	{
    	parent::__construct();
		$this->load->helper('string');
		$this->load->database();
		$this->db->reconnect();
	}

	public function add_log(){
		$id_log = $this->input->post('id_log');
		$status_code = $this->input->post('status_code');
		$status_message = $this->input->post('status_message');
		$transaction_id = $this->input->post('transaction_id');
		$order_id = $this->input->post('payment_type');
		$transaction_time = $this->input->post('transaction_time');
		$transaction_status = $this->input->post('transaction_status');
		$gross_amount = $this->input->post('gross_amount');
		$signature_key = $this->input->post('signature_key');
	}

}
?>
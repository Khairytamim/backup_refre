<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->model('Home_model');
    	}

    public function user(){
    	$id_chatroom = "1";
    	$data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
    	$this->load->view('chat/user', $data);
    }

    public function fashion(){
    	$id_chatroom = "1";
    	$data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
    	$this->load->view('chat/fashion', $data);
    }

    public function tambah_chat($fashion, $user){
    	$this->db->query("insert into chatroom(waktu_mulai, fashion, user) values(now(), '$fashion', '$user')");
    }

    public function kirim_pesan(){
    	$id_chatroom = "1";
    	$user = $this->input->post("user");
    	$tipe_user =$this->input->post("tipe");
    	$message = $this->input->post("msg");
    	$this->db->query("insert into message(id_chatroom, pesan, id_user, tipe_user) values ('$id_chatroom', '$message', '$user', '$tipe_user')");
    	$data['msg'] = $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
    	$this->load->view('chat/user', $data);
    }

    public function get_pesan(){
    	$id_chatroom = "1";
    	$data =  $this->db->query("select * from message where id_chatroom = '$id_chatroom'");
    	foreach ($data->result() as $key) {
    		echo "<p>".$key->id_user.": ".$key->pesan."</p>";
    	}
    }
		
}
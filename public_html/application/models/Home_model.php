<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model {
    
    	public function __construct()
    	{
        	parent::__construct();
		$this->load->helper('string');
		$this->load->database();
		$this->db->reconnect();
    	}
	
    public function list_produk(){
		$this->db->reconnect();
		$hasil=$this->db->query("call list_produk_home()");
                return $hasil;
	}
    
	public function list_produk_pria(){
		$this->db->reconnect();
		$hasil=$this->db->query("call list_produk_pria()");
                return $hasil;
	}
    
    
    public function list_produk_wanita(){
		$this->db->reconnect();
		$hasil=$this->db->query("call list_produk_wanita()");
                return $hasil;
	}
	
	public function show_subcategory($id_){
		$sub=$this->db->query("call show_subcategory('$id_')");
		return $sub;
	}
	
	public function tampil_home($id_){
		$sub=$this->db->query("call tampil_home('$id_')");
		return $sub;
	}
	
	public function gaktampil_home($id_){
		$sub=$this->db->query("call gaktampil_home('$id_')");
		return $sub;
	}
	
	public function nama_subcategory($id_){
		$sub=$this->db->query("call nama_subcategory('$id_')");
		return $sub;
	}
	
	public function show_brand(){
		$this->db->reconnect();
		$sub=$this->db->query("call show_brand()");
		return $sub;
	}
	
    public function persona_product($persona){
		$this->db->reconnect();
		$hasil = $this->db->query("select * from produk where id_personality = '$persona'");
		return $hasil;
	}
    
	public function list_produk_category($id_,$id2_){
		$sub=$this->db->query("call list_produk_category('$id_','$id2_')");
		return $sub;
	}
    
    public function list_produk_category_wanita($id_,$id2_){
		$sub=$this->db->query("call list_produk_category('$id_','$id2_')");
		return $sub;
	}
    
	public function detail_produk_perbrand($id_toko){
                $hasil=$this->db->query("call detail_produk_perbrand('$id_toko')");
                return $hasil;
        }
        public function list_produk_percategory($pk_subcategories){
                $hasil=$this->db->query("call list_produk_percategory('$pk_subcategories')");
                return $hasil;
        }
    
    public function list_produk_percategory_wanita($pk_subcategories){
                $hasil=$this->db->query("call list_produk_percategory('$pk_subcategories')");
                return $hasil;
        }    
    
    function login($email,$password) {
        $query = $this->db->query("call login_user('$email', '$password')");    
        if($query->num_rows()>0)
        {
        foreach($query->result() as $rows)
            {
           $newdata = array(
            'id_user' => $rows->id_user,
            'nama_user' => $rows->nama_user,
            'email_user' => $rows->email_user,
            'type_user' => 'admin_user',
            'logged_in'  => TRUE,
               );
        }
            $this->session->set_userdata($newdata);
           return true;            
    }
    return false;
    }
    
    
    function login_stylist($email,$password) {
	        $query = $this->db->query("call login_stylist('$email', '$password')");    
	        if($query->num_rows()>0)
	        {
		   	foreach($query->result() as $rows)
        		{
               $newdata = array(
               	'id_stylist' => $rows->id_user,
				'nama_stylist' => $rows->nama_user,
				'email_stylist' => $rows->email_user,
				'type_user' => 'admin_user',
				'logged_in'  => TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
               return true;            
		}
		return false;
    	}

	public function daftar_pemesanan_user($id){
		$hasil=$this->db->query("call daftar_pemesanan_user('$id',1)");
		return $hasil;
	}

}
?>
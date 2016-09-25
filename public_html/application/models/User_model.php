<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    	public function __construct()
    	{
        	parent::__construct();
		$this->load->helper('string');
		$this->load->database();
    	}
    	
    	function cek_alamat(){
    		$this->db->reconnect();
    		$id_user = $this->session->userdata('id_user');
    		$query = $this->db->query("call cek_alamat('$id_user')");
    		return $query;
    	}

    	function tambah_billing(){
    		$this->db->reconnect();
    		$id_user= $this->session->userdata('id_user');
    		$hasil = $this->db->query("call insert_billing('$id_user')");
    		$id_terakhir= 0;
    		foreach ($hasil->result() as $key) {
    			$id_terakhir = $key->id_billing;
    		}
    		$this->db->reconnect();
    		$hasil = $this->db->query("select provinsi, kode_pos, alamat_user, id_kota from user where id_user = '$id_user'");
    		foreach ($hasil->result() as $key) {    		
    		$provinsi_penerima = $key->provinsi;
    		$kode_pos_penerima = $key->kode_pos;
    		$alamat_penerima = $key->alamat_user;
    		$id_kota_penerima = $key->id_kota;
    		} 
    	if(empty($_SESSION['cart'])){
		$_SESSION['cart'] = array();
		}
            $ukuran_array = sizeof($_SESSION['cart']);
            $j=0;$panjang=13;
		for ($i=0; $i < ($ukuran_array/$panjang); $i++){
				if($_SESSION['cart'][$j+7]==1){
					$id_produk = $_SESSION['cart'][$j];
					$nama_produk = $_SESSION['cart'][$j+1];
					$harga = $_SESSION['cart'][$j+2];
					$id_toko = $_SESSION['cart'][$j+3];
					$tempat_toko = $_SESSION['cart'][$j+4];
					$id_kota = $_SESSION['cart'][$j+5];
					$ukuran = $_SESSION['cart'][$j+6];
					$status = $_SESSION['cart'][$j+7];
					$jumlah = $_SESSION['cart'][$j+8];
					$berat = $_SESSION['cart'][$j+9];
					$pengiriman = $_SESSION['cart'][$j+10];
					$tipe_pengiriman = $_SESSION['cart'][$j+11];
					$harga_pengiriman = $_SESSION['cart'][$j+12];

					$this->db->query("insert into billing_detail(id_produk,id_billing, nama_produk, harga, id_toko, tempat_toko, id_kota, ukuran, status, jumlah, berat, pengiriman, tipe_pengiriman,
						harga_pengiriman, provinsi_penerima, kode_pos_penerima, alamat_penerima, id_kota_penerima) 
					values('$id_produk', '$id_terakhir','$nama_produk', '$harga', '$id_toko', '$tempat_toko', '$id_kota', '$ukuran', '$status', '$jumlah', '$berat', '$pengiriman', '$tipe_pengiriman', '$harga_pengiriman',
						'$provinsi_penerima', '$kode_pos_penerima', '$alamat_penerima', '$id_kota_penerima')");

			}
            $j=$j+$panjang;
		}

    	}
    	
    	function get_id_kota(){
    		$this->db->reconnect();
    		$id_user = $this->session->userdata('id_user');
    		$query = $this->db->query("select id_kota from user where id_user = '$id_user'");
    		return $query;
    	}
	
	function login($email,$password)
    	{
        $query = $this->db->query("call login('$email', '$password')");    
        if($query->num_rows()>0)
        {
		   	foreach($query->result() as $rows)
        		{
               $newdata = array(
				'id_user' => $rows->id_user,
				'nama_user' => $rows->nama_user,
				'email_user' => $rows->email_user,
				'logged_in'  => TRUE,
                   );
			} 
            	$this->session->set_userdata($newdata);
               return true;            
		}
		return false;
    	}
    	
    	function get_akun_data(){
    		$this->db->reconnect();
    		$id_user = $this->session->userdata('id_user');
    		$query = $this->db->query("select nama_user,email_user,nomor_telepon_user,kode_pos,kota,provinsi,alamat_user,id_kota from user where id_user = '$id_user'");
    		return $query;
    	}
    	
    public function alamat_payment()
	{
		$id_user = $this->session->userdata('id_user');
		$provinsi= $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$id_kota = $this->input->post('kotakota');
		$kode_pos = $this->input->post('kode_pos');
		$alamat = $this->input->post('alamat');
		$this->db->query("update user set provinsi = '$provinsi', kota = '$kota', id_kota='$id_kota', kode_pos = '$kode_pos',
		alamat_user = '$alamat' where id_user='$id_user'");
	}
    
    	public function simpan_alamat()
	{
		$id_user = $this->session->userdata('id_user');
		$provinsi= $this->input->post('provinsi');
		$kota = $this->input->post('kota');
		$id_kota = $this->input->post('kotakota');
		$kode_pos = $this->input->post('kode_pos');
		$alamat = $this->input->post('alamat');
		$this->db->query("update user set provinsi = '$provinsi', kota = '$kota', id_kota='$id_kota', kode_pos = '$kode_pos',
		alamat_user = '$alamat' where id_user='$id_user'");
	}
	
    public function update_akun()
	{
		$id_user = $this->session->userdata('id_user');
		$nama= $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$this->db->query("update user set nama_user = '$nama', email_user = '$email', nomor_telepon_user = '$nohp' where id_user='$id_user'");
	}
    
    public function cekdata()
	{
		$this->db->reconnect();
    		$id_user = $this->session->userdata('id_user');
    		$query = $this->db->query("select id_billing, total, status_bayar from billing where id_user = '$id_user'");
    		return $query;
	}
    
	public function add_user()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$nomor_telepon=$this->input->post('nomor_telepon');
		$hasil=$this->db->query("call buat_auth('$nama', '$email', '$nomor_telepon', '$password')");
		foreach ($hasil->result() as $row)
		{
			$auth = $row->auth;
		}
		$this->email($email, $auth);
	}
	public function add_member()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$nomor_telepon=$this->input->post('no_hp');
		$password=$this->input->post('password');
		$kodepos=$this->input->post('kode_pos');
		$provinsi=$this->input->post('provinsi');
		$kota=$this->input->post('kota');
		$kotakota=$this->input->post('kotakota');
		$hasil=$this->db->query("call buat_auth_member('$nama', '$email', '$alamat', '$kodepos', '$kota', '$nomor_telepon', '$password', '$kotakota','$provinsi')");
		foreach ($hasil->result() as $row)
		{
			$auth = $row->memberauth;
		}
		$this->email_member($email, $auth);
	}

        public function add_toko()
	{
		$nama_toko=$this->input->post('namatoko');
		$email_toko=$this->input->post('emailtoko');
                $nama_owner=$this->input->post('namaowner');
                $nomor_teleponowner=$this->input->post('nomor_teleponowner');
                $website=$this->input->post('website');
                $nomor_telepontoko=$this->input->post('nomor_telepontoko');
                $alamat=$this->input->post('alamat');
		$password=$this->input->post('password');
		$hasil=$this->db->query("call buat_auth_toko('$nama_toko', '$email_toko', '$nama_owner', '$nomor_teleponowner', 
                          '$website', '$nomor_telepontoko', '$alamat', '$password')");
                
		foreach ($hasil->result() as $row)
		{
			$auth = $row->tokoauth;
		}
		$this->email($email_toko, $auth);
	}
	
	 public function add_toko_cabang()
	{
		$id_toko = $this->session->userdata('id_toko');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
                $nama_penanggung_jawab=$this->input->post('nama_penanggung_jawab');
                $nomor_telepon_penanggung_jawab=$this->input->post('nomor_telepon_penanggung_jawab');
                $nomor_telepon_cabang=$this->input->post('nomor_telepon_cabang');
                $alamat_cabang=$this->input->post('alamat_cabang');
                $norek=$this->input->post('no_rekening');
                $bank=$this->input->post('bank');
                $id_kota=$this->input->post('kotakota');
                $kota=$this->input->post('kota');
                $kode_pos=$this->input->post('kode_pos');
               	$this->db->query("call buat_cabang('$id_toko', '$email', '$password', '$nama_penanggung_jawab', 
                          '$nomor_telepon_penanggung_jawab', '$nomor_telepon_cabang', '$alamat_cabang','$norek','$bank','$kota','$kode_pos','$id_kota')");
	}
	
	public function check_email_exist($email)
    	{
	   $query=$this->db->query("SELECT `email_user` FROM `user` WHERE `email_user` = '$email'");
        if($query->num_rows()>0){
            	return true;
        }else{
			return false;
        }
    	}

        public function check_email_exist_toko($email)
    	{
	   $query=$this->db->query("SELECT `email_toko` FROM `toko` WHERE `email_toko` = '$email'");
        if($query->num_rows()>0){
            	return true;
        }else{
	   return false;
        }
    	}
	
	public function check_email_exist_toko_cabang($email)
    	{
	   $query=$this->db->query("SELECT `email_toko` FROM `toko`,`cabang` WHERE `email_toko` = '$email' or `email`='$email'");
        if($query->num_rows()>0){
            	return true;
        }else{
	   return false;
        }
    	}
	
	public function email_member($email,$auth)
	{
	$link=base_url();
	// Set SMTP Configuration
	$emailConfig = array(
   	'protocol'  => 'smtp',
    	'smtp_host' => 'ssl://smtp.zoho.com',
    	'smtp_port' => 465,
    	'smtp_user' => 'noreply@seveid.com',
    	'smtp_pass' => 'masdidit123',
    	'mailtype'  => 'html', 
    	'charset'   => 'iso-8859-1'
	);
	
	//Set your email information
	$from = array('email' => 'noreply@seveid.com', 'name' => 'Refre.co');
	//$to = array('fikry.labsky08@gmail.com');
	$to = $email;
	$subject = 'Verification Refre';
	$message = "<html><body>
	<center><img src='$link/assets/img/logo_seve/logorefre.png' style='width:20%'></center>
	<br>  
	<p>Hai, <a>$email</a>,</p>
	<p>Terima telah mendaftar di REFRE , untuk selanjutnya anda dapat melakkukan konsultasi dengan fashion stylist.</p>
    <p>Akun anda akan segara terverifikasi, silahkan klik dan login</p>
    <a style='font-style:italic; font-weight:800;color:#4baf4f' href='http://refre.co/refre/authentication_member/$auth' target='_blank'>LOGIN</a>
    </body></html>";
	
	// Load CodeIgniter Email library
	$this->load->library('email', $emailConfig);
	 
	// Sometimes you have to set the new line character for better result
	
	$this->email->set_newline("\r\n");
	// Set email preferences
	$this->email->from($from['email'], $from['name']);
	$this->email->to($to); 
	$this->email->subject($subject);
	$this->email->message($message);
	
	//$this->email->attach('http://seveid.com/assets/mou/MoU_seve.pdf','inline');
	// Ready to send email and check whether the email was successfully sent
	 
		if (!$this->email->send()) {
			// Raise error message
			//show_error($this->email->print_debugger());
		}
		else {
			// Show success notification or other things here
			//echo '';
		}
	}
	
    public function email($email,$auth)
	{
	$link=base_url();
	// Set SMTP Configuration
	$emailConfig = array(
   	'protocol'  => 'smtp',
    	'smtp_host' => 'ssl://smtp.zoho.com',
    	'smtp_port' => 465,
    	'smtp_user' => 'noreply@seveid.com',
    	'smtp_pass' => 'masdidit123',
    	'mailtype'  => 'html', 
    	'charset'   => 'iso-8859-1'
	);
	
	//Set your email information
	$from = array('email' => 'noreply@seveid.com', 'name' => 'Admin SEVE');
	//$to = array('fikry.labsky08@gmail.com');
	$to = $email;
	$subject = 'Verifikasi Pembuatan Akun Baru SEVE';
	$message = "<html><body>
	<h2 style='text-align:center; font-style:italic;'>Verifikasi Email Toko</h2>
	<br>  
	<p>Hai, <a href='mailto:$email'>$email</a>,</p>
	<p>Terima telah mendaftarkan Toko anda, untuk informasi lebih lanjut anda dapat membaca MoU yang ada dibawah.</p>
        <p>Akun anda akan segara terverifikasi, silahkan klik</p>
        <!-- <a style='font-style:italic; font-weight:800;color:#4baf4f' href='http://seveid.com/verifikasi/authentication_toko/$auth' target='_blank'>Verifikasi Email</a> -->
        <a style='font-style:italic; font-weight:800;color:#4baf4f' href='http://seveid.com/UserAgreement/verif/$auth' target='_blank'>User Agreement</a>
        <p>Untuk kembali ke website,</p>
	<p><a href='http://seveid.com'>seve</a></p></body></html>";
	
	// Load CodeIgniter Email library
	$this->load->library('email', $emailConfig);
	 
	// Sometimes you have to set the new line character for better result
	
	$this->email->set_newline("\r\n");
	// Set email preferences
	$this->email->from($from['email'], $from['name']);
	$this->email->to($to); 
	$this->email->subject($subject);
	$this->email->message($message);
	
	//$this->email->attach('http://seveid.com/assets/mou/MoU_seve.pdf','inline');
	// Ready to send email and check whether the email was successfully sent
	 
		if (!$this->email->send()) {
			// Raise error message
			//show_error($this->email->print_debugger());
		}
		else {
			// Show success notification or other things here
			//echo '';
		}
	}

	public function get_id_billing(){
        	$this->db->reconnect();
        	$id_user = $this->session->userdata('id_user');
	        $hasil=$this->db->query("call get_id_terakhir_billing('$id_user')");
	        return $hasil;
        }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands2 extends CI_Controller {
	public function __construct(){
        parent::__construct();
         $this->load->model('Transaksi_model');
         $this->load->model('Home_model');
    }
	public function index()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Brands / cari dan buat gayamu';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('sidenav/sidenavbrand',$data);
		$this->load->view('home/brands', $data);
		$this->load->view('footer/footerbar', $data);
	}
	
	public function profil()
	{
		$data['produk_terbaru'] = $this->Home_model->list_produk();
		$this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Brands / cari dan buat gayamu';
		$this->load->view('header/header_1', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('sidenav/sidenavbrand',$data);
		$this->load->view('brands/profilbrand');
		$this->load->view('footer/footerbar', $data);
	}
	
	public function detail($id_produk)
	{
		$data['produk'] = $this->Transaksi_model->detail_produk($id_produk);
		$this->db->reconnect();
		$tipe = $this->Transaksi_model->get_ukuran($id_produk);
		$data['tipe']='';
                $tipe_barang=0;
		foreach ($tipe->result() as $row) {
			$tipe_barang = $data['tipe'] = $row->tipe;
		}
		$this->db->reconnect();
                		if($tipe_barang ==0){
			$ukuran= $this->Transaksi_model->show_ukuran_nol($id_produk);
			foreach($ukuran->result() as $row){
				$data['item']['1'] = $row->ukuran; 
			}
		}else if($tipe_barang ==1){
			$ukuran= $this->Transaksi_model->show_ukuran_satu($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['1'] = $row->c1; 
				$data['item1']['2'] = $row->c2; 
				$data['item1']['3'] = $row->c3; 
				$data['item1']['4'] = $row->c4; 
				$data['item1']['5'] = $row->c5; 
				$data['item1']['6'] = $row->c6; 
				
				$data['item2']['1'] = $row->l1; 
				$data['item2']['2'] = $row->l2; 
				$data['item2']['3'] = $row->l3; 
				$data['item2']['4'] = $row->l4; 
				$data['item2']['5'] = $row->l5; 
				$data['item2']['6'] = $row->l6; 
				
				$data['item3']['1'] = $row->s1; 
				$data['item3']['2'] = $row->s2; 
				$data['item3']['3'] = $row->s3; 
				$data['item3']['4'] = $row->s4; 
				$data['item3']['5'] = $row->s5; 
				$data['item3']['6'] = $row->s6; 
			}
		}else if($tipe_barang ==2){
			$ukuran= $this->Transaksi_model->show_ukuran_dua($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['36'] = $row->u36; 
				$data['item1']['37'] = $row->u37; 
				$data['item1']['38'] = $row->u38; 
				$data['item1']['39'] = $row->u39; 
				$data['item1']['40'] = $row->u40; 
				$data['item1']['41'] = $row->u41;
				$data['item1']['42'] = $row->u42; 
				$data['item1']['43'] = $row->u43; 
				$data['item1']['44'] = $row->u44; 
				$data['item1']['45'] = $row->u45; 
				$data['item1']['46'] = $row->u46; 
				$data['item1']['47'] = $row->u47;
			}
		}else if($tipe_barang ==3){
			$ukuran= $this->Transaksi_model->show_ukuran_tiga($id_produk);
			foreach($ukuran->result() as $row){
				$data['item1']['27'] = $row->i27; 
				$data['item1']['28'] = $row->i28; 
				$data['item1']['29'] = $row->i29; 
				$data['item1']['30'] = $row->i30; 
				$data['item1']['31'] = $row->i31; 
				$data['item1']['32'] = $row->i32; 
				$data['item1']['33'] = $row->i33; 
				$data['item1']['34'] = $row->i34; 
				$data['item1']['35'] = $row->i35; 
				$data['item1']['36'] = $row->i36; 
				$data['item1']['37'] = $row->i37; 
				$data['item1']['38'] = $row->i38; 
				
				
				$data['item2']['27'] = $row->w27; 
				$data['item2']['28'] = $row->w28; 
				$data['item2']['29'] = $row->w29; 
				$data['item2']['30'] = $row->w30; 
				$data['item2']['31'] = $row->w31; 
				$data['item2']['32'] = $row->w32; 
				$data['item2']['33'] = $row->w33; 
				$data['item2']['34'] = $row->w34; 
				$data['item2']['35'] = $row->w35; 
				$data['item2']['36'] = $row->w36; 
				$data['item2']['37'] = $row->w37; 
				$data['item2']['38'] = $row->w38; 
				
				
				$data['item3']['27'] = $row->h27; 
				$data['item3']['28'] = $row->h28; 
				$data['item3']['29'] = $row->h29; 
				$data['item3']['30'] = $row->h30; 
				$data['item3']['31'] = $row->h31; 
				$data['item3']['32'] = $row->h32; 
				$data['item3']['33'] = $row->h33; 
				$data['item3']['34'] = $row->h34; 
				$data['item3']['35'] = $row->h35; 
				$data['item3']['36'] = $row->h36; 
				$data['item3']['37'] = $row->h37; 
				$data['item3']['38'] = $row->h38; 
				
				$data['item4']['27'] = $row->t27; 
				$data['item4']['28'] = $row->t28; 
				$data['item4']['29'] = $row->t29; 
				$data['item4']['30'] = $row->t30; 
				$data['item4']['31'] = $row->t31; 
				$data['item4']['32'] = $row->t32; 
				$data['item4']['33'] = $row->t33; 
				$data['item4']['34'] = $row->t34; 
				$data['item4']['35'] = $row->t35; 
				$data['item4']['36'] = $row->t36; 
				$data['item4']['37'] = $row->t37; 
				$data['item4']['38'] = $row->t38;
			}
		}
                $this->db->reconnect();
         	$data['brand'] = $this->Home_model->show_brand();
		$title['title']='Detail Brands / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('brands/detail', $data);
		$this->load->view('footer/footerbar', $data);
	}
	public function detail_brand($id_toko)
	{
		$data['produk'] = $this->Home_model->detail_produk_perbrand($id_toko);
		$this->db->reconnect();
        $data['brand'] = $this->Home_model->show_brand();
		$title['title']='Detail Brands / cari dan buat gayamu';
		$this->load->view('header/header_brand', $title);
		$this->load->view('navbar/no_menu',$data);
		$this->load->view('sidenav/sidenavbrand',$data);
		$this->load->view('brands/list_produk_brand', $data);
		$this->load->view('footer/footerbar', $data);
	}

        public function cek_ketersediaan_produk($id){
		$ukuran = $this->input->post('ukuran');
		$cek_ketersediaan_produk['cabang'] = $this->Transaksi_model->cek_ketersediaan_produk($id, $ukuran);
		$this->load->view('brands/ketersediaan_produk',$cek_ketersediaan_produk);
	}
	
	public function add_cart(){
		$id_produk = $this->input->post('id_produk');
		//$id_produk = 131;
                $hasil = $this->Transaksi_model->get_produk($id_produk);
                $nama_produk='';
                $harga='';
                foreach($hasil->result() as $row){
                       $nama_produk = $row->nama_produk;
                       $harga = $row->harga;
                }
		$infotoko= $this->input->post('id_toko');
		//echo $infotoko;
		//$infotoko = "12|makasar|1";
		$pieces = explode("|", $infotoko);
		$id_toko = $pieces[2];
		$tempat_toko = $pieces[1];
		$id_kota =  $pieces[0];
		$ukuran = $this->input->post('ukuran');
		if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
		$status = 1;
		$jumlah = 1;	
		$berat = 	$this->input->post('berat');
		$ukuran_array = sizeof($_SESSION['cart']);
                //echo  $ukuran_array;
                $j=0;$id_produk_ke=0;$status_ada_barang_sama=0;$panjang=13;
		for ($i=0; $i < ($ukuran_array/$panjang); $i++){
			if($_SESSION['cart'][$j]==$id_produk && $_SESSION['cart'][$j+6]==$ukuran && $_SESSION['cart'][$j+3]==$id_toko){
			$id_produk_ke = $j;
			$status_ada_barang_sama=1;}
			$j=$j+$panjang;
		}
		if($status_ada_barang_sama==1){
			$_SESSION['cart'][$id_produk_ke+8] = $_SESSION['cart'][$id_produk_ke+8] + $jumlah;
		}else{
	               array_push($_SESSION['cart'], $id_produk, $nama_produk, $harga, $id_toko, $tempat_toko, $id_kota, $ukuran, $status, $jumlah, $berat, $pengiriman, $tipe_pengiriman, $harga_pengiriman);
		}
	}

        public function show_cart(){
        	if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
                $ukuran_array = sizeof($_SESSION['cart']);
                $j=0;$panjang=13;
                echo "id_produk | nama_produk | harga | id_toko| tempat_toko | id_kota | ukuran | status | jumlah | berat | pengiriman | tipe_pengiriman | harga";
                echo  nl2br ("\n");
		for ($i=0; $i < ($ukuran_array/$panjang); $i++){
			if($_SESSION['cart'][$j+7]==1){
			echo  nl2br ("\n");
			for($m=0; $m < $panjang;$m++){
			echo $_SESSION['cart'][$j+$m];
			echo ",";}
			echo  nl2br ("\n");}
            $j=$j+$panjang;
		}
        }
        
        public function remove_cart($j){
               $_SESSION['cart'][$j]=0;
               redirect('/cart');
        }
        
        public function remove_session(){
               session_destroy();
        }

        public function update_ongkir($j, $pengiriman, $tipe_pengiriman, $harga){
        		$_SESSION['cart'][$j+ 10]= $pengiriman;
        		$_SESSION['cart'][$j+ 11]= $tipe_pengiriman;
        		$_SESSION['cart'][$j+ 12]= $harga;
        } 
    
        public function update_kuantitas($id_, $value_){
               $_SESSION['cart'][$id_]=$value_;
                echo $_SESSION['cart'][$id_];
                echo $id_;
            var_dump($_SESSION['cart']);

        }

        public function pembayaran(){
        	if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}
                $ukuran_array = sizeof($_SESSION['cart']);
                $j=0;$panjang=13;
                echo "id_produk | nama_produk | harga | id_toko| tempat_toko | id_kota | ukuran | status | jumlah | berat | pengiriman | tipe_pengiriman | harga";
                echo  nl2br ("\n");
			for ($i=0; $i < ($ukuran_array/$panjang); $i++){
				if($_SESSION['cart'][$j+7]==1){
				echo  nl2br ("\n");
				for($m=0; $m < $panjang;$m++){
				echo $_SESSION['cart'][$j+$m];
				echo "  |  ";}
				echo  nl2br ("\n");}
	            $j=$j+$panjang;
			}
			//var_dump($_SESSION['cart']);
			echo "------------------------------------------------------------------------------------------------------------";
			$id_terakhir = $this->Transaksi_model->get_id_billing();
			foreach ($id_terakhir->result() as $key) {
				$id_terakhir = $key->id_billing;
			}
			echo  nl2br ("\n");
			echo "id_billing :".$id_terakhir;
			$user = $this->Transaksi_model->get_user();

			foreach ($user->result() as $key) {
				$first_name = $key->nama_user;
				$last_name = "";
				$address = $key->alamat_user;
				$city = $key->kota;
				$postal_code = $key->kode_pos;
				$phone = $key->nomor_telepon_user;
				$country_code = "IDN";
			} 
				$billing_address = array(
				'first_name' 		=> $first_name,
				'last_name' 		=> "",
				'address' 			=> $address,
				'city' 				=> $city,
				'postal_code' 		=> $postal_code,
				'phone' 			=> $phone,
				'country_code'		=> 'IDN'
			);
			
			// Populate customer's shipping address
			$shipping_address = array(
				'first_name' 	=> "Fikry",
				'last_name' 	=> "Khairytamim",
				'address' 		=> "Jalan Bazoka Raya no24 blok I",
				'city' 				=> "Jakarta Barat",
				'postal_code' => "14022",
				'phone' 			=> "081703434379",
				'country_code'=> 'IDN'
			);
        }
}
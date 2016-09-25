<div class="container" style="padding-top: 2em; margin-bottom: 3em">
    <?php foreach ($data->result() as $row){ ?>
    <h4 style="color: #e45d25"><b>Akun Saya</b></h4>
    <p><b><?php echo $row->nama_user?></b><br>Disini kamu dapat melihat atau memperbarui informasimu. Silahkan klik link dibawah ini</p>
    
    <style>
        .user-panel {
            color:rgba(0,0,0,0.87);
            padding:1.2em;
            border:solid 1px lightgrey;
            //margin-bottom: 1em;
            min-height: 14em;
        }
    </style>
    
    <div id="modal-pengaturan-akun" class="modal" style="padding: 1em">
        <div class="modal-content">
            <h4>Pengaturan Akun</h4>
            <form action="<?php echo base_url();?>user/update_akun" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="nama" value="<?php echo $row->nama_user; ?>" type="text">
                        <label>Nama</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="email" value="<?php echo $row->email_user?>" type="text">
                        <label>Email</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="nohp" value="<?php echo $row->nomor_telepon_user?>" type="text">
                        <label>Nomor Telepon</label>
                    </div>
                    <!--div class="input-field col s6">
                           <input name="password" id="password" type="password" class="validate" value="<?php echo $row->password_user?>">
                           <label for="password">Password Lama</label>
                    </div>
                    <div class="input-field col s6">
                           <input name="password" id="password" type="password" class="validate">
                           <label for="password">Password Baru (minimal 6 karakter)</label>
                    </div>
                      <div class="input-field col s6">
                           <input name="con_password" id="con_password" type="password" class="validate">
                           <label for="con_password">Ulangi Password </label>
                      </div-->
                    <button class="btn" type="submit" style="width:100%; margin: 1em 0.5em 0 0.5em;">
                        Ganti
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div id="modal-alamat" class="modal" style="padding: 1em">
        <div class="modal-content">
            <h4>Alamat Saya</h4>
                <div class="row">
                    <div class="col s12 m4 l4">
                        <p><b>Alamat saat ini</b><br><?php echo $row->alamat_user?>, <?php echo $row->kota?>, <?php echo $row->provinsi?>, <?php echo $row->kode_pos?></p>
                    </div>
                    <div class="input-field col s12 m8 l8">
                        <form action="<?php echo base_url();?>User/simpan_alamat" method="post">
                            <div class="input-field col s12">
                                <input  name="provinsi" type="text" class="validate" value="<?php echo $row->provinsi; ?>">
                                <label>Provinsi</label>
                            </div>
                                <div class="input-field col s6">
                                    <input name="kota" autocomplete="off" class="inputkota" type="text" class="validate"  value="<?php echo $row->kota; ?>">
                                    <label for="kota">Kota</label>
                                </div>
                                <input type="hidden" name="kotakota" value="" />
                                <div class="input-field col s6">
                                    <input name="kode_pos" type="text" class="validate" value="<?php echo $row->kode_pos; ?>">
                                    <label>Kode POS</label>
                                </div>
                            <div class="input-field col s12">
                                <textarea name="alamat" class="materialize-textarea"><?php echo $row->alamat_user;?></textarea>
                                <label>Detail alamat</label>
                            </div>
                            <button class="btn" type="submit" style="width:100%; margin: 1em 0.5em 0 0.5em;">Ganti</button>
                        </form>
                    </div>
                    
                </div>
    
        </div>
    </div>
    
    <div class="row" style="margin-top: 3em">
        <div class="col s12 m6 l6">
            <div class="user-panel">
                <h5>Pengaturan Akun</h5>
                <div class="row" style="margin-bottom: 0; margin-top:-5px; padding-left: 5px">
                    <p class="col s12 m6">
                        Nama: <?php echo $row->nama_user?><br>
                        Email: <?php echo $row->email_user?>
                    </p>
                    <p class="col s6">
                        Nomor Telepon: <?php echo $row->nomor_telepon_user?><br>
                    </p>
                </div>
                <a class="btn modal-trigger" href="#modal-pengaturan-akun">Ubah</a>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="user-panel">
                <h5>Alamat Saya</h5>
                <p><?php echo $row->alamat_user?>, <?php echo $row->kota?>, <?php echo $row->provinsi?>, <?php echo $row->kode_pos?></p>
                <a class="btn modal-trigger" href="#modal-alamat">Ubah</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<script type="text/javascript">
    
$(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal-trigger').leanModal();
	  });
    
$(document).ready(function(){
<?php
foreach($id_kota_asal->result() as $key){
	$id_kota = $key->id_kota;
} 
$subtotal=0;if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
  $ukuran_array = sizeof($_SESSION['cart']);
  $j=0;
  for ($i=0; $i < ($ukuran_array/9); $i++){
  if($_SESSION['cart'][$j+7]==1){
  ?>
	$.ajax({
	    url: "http://seveid.com/pembayaran/track/444/<?php echo $_SESSION['cart'][$j+5];?>/200",
	    type: "POST",
	    data: "",
	    success: function (response) {
	    var obj<?php echo $i;?> = JSON.parse(response);
	    	item = obj<?php echo $i;?>.rajaongkir.results.length;
	    	isian = "";
	    	console.log(item);
	    	for (i = 0; i < item; i++) { 
	        	isian = isian + obj<?php echo $i;?>.rajaongkir.results.code[0]+ "</br>";
	        	}
	        $('#biaya<?php echo $i;?>').html(isian);
	        //console.log(response);
	    },
	});
	<?php } $j=$j+9; }?>
}); 

</script>
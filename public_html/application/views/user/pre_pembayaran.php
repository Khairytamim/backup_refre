<style>
    .user-panel {
        color:rgba(0,0,0,0.87);
        padding:1.2em;
        border:solid 1px lightgrey;
        margin-bottom: 1em;
    }
</style>

<div class="container" style="padding: 2em 0 2em 0; min-height: 60vh">
	<div class="col s12">
        <span style="font-weight: bold">
            <span style="border-radius: 100px; background-color: #e45d25; padding: 0.4em  0.9em; color: white">3</span>
            Fiksasi Pesanan & Alamat
        </span>
    </div>
	
	<div class="row" style="margin-top: 3em">
	    <form class="col s12" action="<?php echo base_url();?>user/cart" method="post">
		<div class="user-panel">
			<table style="min-width:600px ;overflow-x: scroll">
		        <thead style="border-style: none">
		          <tr>
		              <th style="width: 10em; color: #e45d25">Barang</th>
                      <th></th>
                      <th style="color: #e45d25">Harga</th>
                      <th style="color: #e45d25">Qty</th>
                      <th style="color: #e45d25">Biaya Pengiriman</th>
		          </tr>
		        </thead>
		
		        <tbody>
                         <?php $subtotal=0;if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
                          $ukuran_array = sizeof($_SESSION['cart']);
                          $j=0;$jumlah = 13;
		          for ($i=0; $i < ($ukuran_array/$jumlah); $i++){
		          if($_SESSION['cart'][$j+7]==1){
                          ?>
		          <tr>
		            <td>
		            	<img src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $_SESSION['cart'][$j];?>.jpg" style="width: 8em">
		            </td>
		            <td>
		            	<b><?php echo $_SESSION['cart'][$j+1];?></b><br>
                        <ul>
                            <li>Ukuran: <?php echo $_SESSION['cart'][$j+6];?></li>
                            <li>Id Toko: <?php echo $_SESSION['cart'][$j+3];?></li>
                            <li>Tempat Toko: <?php echo $_SESSION['cart'][$j+4];?></li>
                            <li>Id Kota: <?php echo $_SESSION['cart'][$j+5];?></li>
                        </ul>
		            </td>
		            <td>
		            	<h5>Rp <?php echo number_format ($_SESSION['cart'][$j+2], 0, '','.'); ?></h5>
		            </td>
		            <td>
		            	<p><?php echo $_SESSION['cart'][$j+8];?></p>
		            </td>
		            <td><div id="biaya<?php echo $i;?>"></div><div id="detail<?php echo $i;?>"></div></td>
		          </tr>
                       <?php $subtotal=$subtotal+($_SESSION['cart'][$j+2]*$_SESSION['cart'][$j+8])+$_SESSION['cart'][$j+12];} $j=$j+$jumlah ; }?>
		        </tbody>
		      </table>
		</div>
		<div class="col s12" style="border: solid 1px lightgrey; padding: 1em">
			<h5>Detail Pesanan</h5>
            <?php foreach ($akun->result() as $row){ ?>
            
                <div class="col s12 m6">
                    <p><b>Alamat Tujuan:</b></p>
                </div>
                <div class="col s12 m6">
                    <p><?php echo $row->alamat_user?>, <?php echo $row->kota?>, <?php echo $row->provinsi?>, <?php echo $row->kode_pos?><br></p>
                </div>
                <div class="col s12 m6">
                    <p><b>Subtotal:</b></p>
                </div>
                <div class="col s12 m6">
                    <p><b style="color: #e45d25">Rp <?php echo number_format ($subtotal, 0, '','.');?></b></p>
                </div>
            
            <?php } ?>
            <!--a class="modal-trigger btn" style="width:100%; margin-top: 13px" href="#pembayaran">LANJUTKAN KE PEMBAYARAN</a-->	
            <button class="btn" type="submit" style="margin-top: 1em; width:100%">LANJUTKAN KE PEMBAYARAN</button>
		</div>
	    </form>
	</div>
</div>

<div id="pembayaran" class="modal">
    <div class="modal-content">
        <center><span style="font-weight: bold">TIPE PEMBAYARAN</span></center>
      <div class="row">
          <div class="col s12 l6">
              <button class="btn" type="submit" style="margin-top: 1em; width:100%">VERITRANS</button>
          </div>
          <div class="col s12 l6">
              <a class="modal-trigger btn inverted" style="width:100%; margin-top: 13px" href="<?php echo base_url();?>user/transfer">ATM TRANSFER</a>
          </div>
      </div>
    </div>
</div>

<style>
	td {
		vertical-align: top;
	}
</style>

<script type="text/javascript">
$(document).ready(function(){
	function toRp(a,b,c,d,e){e=function(f){return f.split('').reverse().join('')};b=e(parseInt(a,10).toString());for(c=0,d='';c<b.length;c++){d+=b[c];if((c+1)%3===0&&c!==(b.length-1)){d+='.';}}return e(d)}
<?php
$id_kota = 0;
foreach($id_kota_asal->result() as $key){
	$id_kota = $key->id_kota;
} 
$subtotal=0;if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
  $ukuran_array = sizeof($_SESSION['cart']);
  $j=0;$jumlah = 13;
  for ($i=0; $i < ($ukuran_array/$jumlah); $i++){
  if($_SESSION['cart'][$j+7]==1){
  ?>
	$.ajax({
	    url: "<?php echo base_url();?>pembayaran/track/<?php echo $_SESSION['cart'][$j+5];?>/<?php echo $id_kota;?>/<?php echo $_SESSION['cart'][$j+9];?>",
	    type: "POST",
	    data: "",
	    success: function (response) {
	    var obj<?php echo $i;?> = JSON.parse(response);
	    	item = obj<?php echo $i;?>.rajaongkir.results.length;
	    	var isian = "";
	    	var tipe = "";
	    	var pengiriman = ""; 
	    	var harga = "";
	    	console.log("jumlah :" + item);
	    	for (i = 0; i < item; i++) { 
	    		isian = isian + obj<?php echo $i;?>.rajaongkir.results[i].code+ "</br>";
	    		jumlah = obj<?php echo $i;?>.rajaongkir.results[i].costs.length;
	    				pengiriman = obj<?php echo $i;?>.rajaongkir.results[i].code; 
	    				tipe=obj<?php echo $i;?>.rajaongkir.results[i].costs[0].service;
	    				harga = obj<?php echo $i;?>.rajaongkir.results[i].costs[0].cost[0].value;
	        	}

	        $('#detail<?php echo $i;?>').html("<p>Rp. "+toRp(harga)+"</p>");

	        	$.ajax({
			    url: "<?php echo base_url();?>brands/update_ongkir/"+<?php echo $j;?>+"/"+ pengiriman+"/"+tipe+"/"+harga,
			    type: "POST",
			    data: "",
			    success: function (response) {
			    
			    },
			});



	        console.log(isian);
	    },
	});
	<?php } $j=$j+$jumlah; }?>
}); 

</script>
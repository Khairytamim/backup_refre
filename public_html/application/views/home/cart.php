<div class="container" style="padding: 2em 0 2em 0; min-height: 60vh">
	<h4 style="color: #e45d25; margin-bottom: 1em"><b>Shopping Cart</b></h4>
	
	<div class="row">
	    <form class="col s12" action="<?php echo base_url();?>cart/payment" method="post">
		<div class="col s12 m12 l8">
			<table style="min-width:600px ;overflow-x: scroll">
		        <thead style="border-style: none">
		          <tr>
		              <th style="width: 12em"></th>
		              <th style="color: #e45d25">Produk</th>
		              <th style="color: #e45d25">Harga</th>
		              <th style="color: #e45d25">Kuantitas</th>
		          </tr>
		        </thead>
		
		        <tbody>
                         <?php $subtotal=0;if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
                          $ukuran_array = sizeof($_SESSION['cart']);
                          $j=0;
		          for ($i=0; $i < ($ukuran_array/13); $i++){
		          if($_SESSION['cart'][$j+7]==1){
                          ?>
		          <tr>
		            <td>
			        <a class="remove" href="<?php echo base_url();?>brands/remove_cart/<?php echo $j+7;?>"><img style="width: 2.5em" src="<?php echo base_url();?>assets/img/remove.png"></a>
		            	<img src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $_SESSION['cart'][$j];?>.jpg" style="width: 10em">
		            </td>
		            <td>
		            	<b><?php echo $_SESSION['cart'][$j+1];?></b><br>
                        <ul>
                            <li>Ukuran: <?php echo $_SESSION['cart'][$j+6];?></li>
                            <li>Id Toko: <?php echo $_SESSION['cart'][$j+3];?></li>
                            <li>Tempat Toko: <?php echo $_SESSION['cart'][$j+4];?></li>
                            <li>Id Kota: <?php echo $_SESSION['cart'][$j+5];?></li>
                        </ul>
<!--		            	<div class="chip" style="font-size:0.7em; margin-top: 1em">Ready Stock</div>-->
		            </td>
                      <td>
                        <h5>Rp <?php echo number_format ($_SESSION['cart'][$j+2], 0, '','.');?></h5>
		              </td>
                      <td>
                        <input id="jumlah<?php echo $i;?>" class="browser-default" name="quantity1" type="number" min="1" max="100" value="<?php echo $_SESSION['cart'][$j+8];?>">
                      </td>
                    </tr>
                       <?php $subtotal=$subtotal+($_SESSION['cart'][$j+2]*$_SESSION['cart'][$j+8]);} $j=$j+13; }?>
                </tbody>
            </table>
		</div>
		<div class="col l3 offset-l1 m12 s12" style="border: solid 1px lightgrey; padding: 1em">
			<h5>Detail Pesanan</h5>
			<div class="col s6">
				<p style="font-weight: 700">
					Subtotal:<br>
				</p>
			</div>
			<div class="col s6">
				<p style="color: #e45d25; font-weight: 700"><span id="hasil" ></span>
				</p>
			</div>
			<button class="btn" type="submit" style="margin-top: 1em; width:100%">LANJUTKAN KE PEMBAYARAN</button>
		</div>
	    </form>
	</div>
</div>

<style>
	td {
		vertical-align: top;
	}
</style>

<script type="text/javascript">
	function toRp(a,b,c,d,e){e=function(f){return f.split('').reverse().join('')};b=e(parseInt(a,10).toString());for(c=0,d='';c<b.length;c++){d+=b[c];if((c+1)%3===0&&c!==(b.length-1)){d+='.';}}return e(d)}
	function hitung(){
		var hasil = 0;
		<?php $subtotal=0;
		if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
		$ukuran_array = sizeof($_SESSION['cart']);
		$j=0;
		for ($i=0; $i < ($ukuran_array/13); $i++){
		if($_SESSION['cart'][$j+7]==1){ ?>

		var nomor = $("#jumlah<?php echo $i;?>").val();
		var harga = <?php echo $_SESSION['cart'][$j+2] ?>;

		if(nomor != 0)
		{
			if(isValidNomorHp(nomor))
			{
				var urll= "<?php echo base_url();?>brands/update_kuantitas/<?php echo ($i+1)*8;?>/"+nomor;
				$.ajax({
				url: urll,
				type: "POST",
					data: "",
				success: function (response) {
			},
			});

				hasil = hasil + nomor * harga;

			} else {
				Materialize.toast('Harus Angka!!!', 3000, 'rounded');
			}

		}
		else {
			Materialize.toast('Harus Angka!!!', 3000, 'rounded');
		}

		<?php }$j=$j+13;} ?>
		$("#hasil").text("Rp. " + toRp(hasil));

	}
	$(document).ready(function(){
		hitung();
	<?php $subtotal=0;
		if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
	$ukuran_array = sizeof($_SESSION['cart']);
	for ($k=0; $k < ($ukuran_array/13); $k++){?>

		$("#jumlah<?php echo $k;?>").change(function(){
			hitung();
		});

		<?php } ?>

	});

	function isValidNomorHp(nomorhp) {
		var pattern = new RegExp(/^[0-9]{1,32}$/i);
		return pattern.test(nomorhp);
	}
</script>
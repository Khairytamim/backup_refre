<div class="container" style="padding: 2em 0 2em 0; min-height: 60vh">
	<h4 style="margin-bottom: 1em; color: #e45d25"><b>Status Pesanan</b></h4>

	<ul class="collapsible" data-collapsible="accordion">
		<?php foreach($pemesanan->result()  as $row) { ?>

	<li>
	    <div class="collapsible-header active" style="background-color: #ededed;">
	    	<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
                    <p><b>Pesanan #<?php echo $row->id_billing;?></b></p>
	    		</div>
	    		<div class="col s2">
                    <p>Rp <?php echo $row->harga;?></p>
	    		</div>
	    		<div class="col s5">
                    <p><?php echo $row->waktu;?></p>
	    		</div>
	    		<div class="col s3">
					<p><?php if($row->flag==1){?>
						<span style="color:green"><b>Transaksi Berhasil</b></span>
					<?php }else{ ?>
						<span style="color:red"><b>Transaksi Gagal</b></span>
                        <?php } ?></p>	    		</div>
	    	</div>
	    </div>
	    <div class="collapsible-body" style="padding: 1em">
		<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
	    			<img src="<?php echo base_url();?>assets/gambar_kaos/xsmall/1/<?php echo $row->id_produk;?>.jpg" style="width:100%">
	    		</div>
	    		<div class="col s2">
                    <p><b><?php echo $row->nama_produk;?></b><br />
		    			Jumlah: <?php echo $row->jumlah;?>
                        Ukuran: <?php echo $row->ukuran;?></p>
	    		</div>
	    		<div class="col s8">
                    <p>Barang telah dikirim ke <?php echo $row->alamat_penerima;?></p> 
                    <p>silahkan cek nomor resi ini <?php echo $row->nomor_resi;?></p>
	    		</div>
	    	</div>
	    </div>
	</li>
			<?php
		} ?>

<!--	<li>
	    <div class="collapsible-header" style="background-color: #ededed">
	    	<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
	    			<b>Pesanan #1231212</b>
	    		</div>
	    		<div class="col s2">
	    			Rp 121.341
	    		</div>
	    		<div class="col s5">
	    			Selasa 12/Des/2015
	    		</div>
	    		<div class="col s3">
	    			<b style="color: #e45d25">Transaksi Gagal</b>
	    		</div>
	    	</div>
	    </div>
	    <div class="collapsible-body" style="padding: 1em">
		<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
	    			<img src="<?php /*echo base_url();*/?>assets/img/baju/1.png" style="width:100%">
	    		</div>
	    		<div class="col s7">
	    			<b>Baju Adem Adem Seger #27138<br>
		    		CoolLike Clothing co.</b><br><br>
		    		Jumlah: 1
	    		</div>
	    		<div class="col s3">
	    			asasas
	    		</div>
	    	</div>
	    </div>
	</li>
	<li>
	    <div class="collapsible-header" style="background-color: #ededed">
	    	<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
	    			<b>Pesanan #1231212</b>
	    		</div>
	    		<div class="col s2">
	    			Rp 121.341
	    		</div>
	    		<div class="col s5">
	    			Selasa 12/Des/2015
	    		</div>
	    		<div class="col s3">
	    			<span style="color: green"><b>Transaksi Berhasil</b></span>
	    		</div>
	    	</div>
	    </div>
	    <div class="collapsible-body" style="padding: 1em">
		<div class="row" style="margin-bottom:0">
	    		<div class="col s2">
	    			<img src="<?php /*echo base_url();*/?>assets/img/baju/1.png" style="width:100%">
	    		</div>
	    		<div class="col s7">
	    				<b>Baju Adem Adem Seger #27138<br>
		    			CoolLike Clothing co.</b><br><br>
		    			Jumlah: 1
	    		</div>
	    		<div class="col s3">
	    			Pembayaran berhasil dan barang sudah sampai tujuan
	    		</div>
	    	</div>
	    </div>
	</li>-->
	
	</ul>
	
	
</div>

<style>
	.collapsible-body, .collapsible-header, .collapsible {border-style: none}
</style>
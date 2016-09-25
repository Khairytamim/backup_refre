<div class="container" style="margin-top: 3%">
   <div class="row">
     	<div class="col s3" style="position:fixed; width: 20%; margin-bottom: 30px;">
  	        <div class="col s12" style="word-break: break-all; hyphens: auto;">
                        <img src="<?php echo base_url();?>assets/img/logo_brand_mini/<?php echo $id_too;?>.jpg" style="width:100px; margin-left:auto; margin-right:auto" onerror="this.src='<?php echo base_url();?>assets/img/logo_brand/coollike.png'">
                    </div>
                    <div class="col s12" style="word-break: break-all; hyphens: auto;">
                        <h6><b><?php echo $nama_user;?></b></h6>
                        <h6><b>ID Cadang : <?php echo $id_cabang;?></b></h6>
                    </div>
                
                <div class="col s12" style="word-break: break-all; hyphens: auto;">
                <p><i class="material-icons">store</i> <b>Toko Saya</b></p>
                <p><a href="<?php echo base_url();?>adminCabang/pengaturan_toko" class="collection-item">Pengaturan Toko</a></p>
                <p><a href="<?php echo base_url();?>adminCabang/pemesanan">Pemesanan</a></p>
                <p><a href="<?php echo base_url();?>adminCabang/pesan">Pesan</a></p>
                <!--p><a href="<?php echo base_url();?>adminCabang/produk">Pesanan Produk</a></p-->
                
                <p style="margin-top: 30px"><i class="material-icons">shopping_basket</i> <b>Produk Saya</b></p>
                <p><a href="<?php echo base_url();?>adminCabang/daftar_produk" class="collection-item">Daftar Produk</a></p>
                </div>

       </div>
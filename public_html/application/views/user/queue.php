<div style="padding: 4em 4em">
<h3>
    <CENTER>
    	ANTRIAN LIST PAKAIAN
    </CENTER>
</h3>
<div class="divider"></div>

<div class="row" style="margin-left:auto;margin-right:auto">

<?php foreach ($produk_terbaru->result() as $row){ ?>
    <div class="col s6 m4 l3" style="padding:0">
    <a href="<?php echo base_url();?>home/antrian/<?php echo $row->id_produk;?>/<?php echo $row->status_tampil;?>" style="position: absolute; z-index:100"><img style="width: 2.5em" src="<?php echo base_url();?>assets/img/check.png"></a>
    <a href="<?php echo base_url();?>home/antrian/<?php echo $row->id_produk;?>/<?php echo $row->status_tampil;?>" style="position: absolute; z-index:100; margin-left: 45px"><img style="width: 2.5em" src="<?php echo base_url();?>assets/img/remove.png"></a>
    <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
    	<div class="card_1">
         	<div class="card-image"> 
         		<div class="item">
              			<img style="width:100%" data-src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg">
              	</div>
              </div>
              <div class="card-content" style="padding: 0.5em">
                   <p class="truncate"><b><?php echo $row->nama_produk;?></b></p>
                   <p class="truncate" style="font-size: 0.9em"><?php echo $row->brand;?></p><br>
                   <p style="color:rgba(0,0,0,0.6); font-size: 0.9em">Rp <?php echo $row->harga;?></p>
         	</div>
    	</div>
    	</a>
    </div>
<?php } ?>

</div>
</div>
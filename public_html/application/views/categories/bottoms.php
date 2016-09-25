<div class="col s9">

		<div class="row" style="margin-left:auto;margin-right:auto">
		
               <?php foreach ($produk->result() as $row){ ?>
                    <div class="col s12 m4 l4">
                    <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
                    	<div class="card_1">
                         	<div class="card-image"> 
                         		<div class="item">
                              			<img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg">
                              	</div>
                              </div>
                              <div class="card-content" style="padding: 0.5em">
                                   <p class="truncate"><b><?php echo $row->nama_produk;?></b></p>
                                   <p class="truncate" style="font-size: 0.8em"><?php echo $row->nama_produk;?></p>
                                   <p style="font-size: 0.9em; text-align: left; font-weight: 500; margin-top: 0.7em"><span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span> Rp <?php echo $row->harga;?></p> 
                         	</div>
                    	</div>
                    	</a>
                    </div>
               <?php } ?>
               </div>
	</div>
</div>
</div>
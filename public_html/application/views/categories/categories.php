        
<script src="<?php echo base_url();?>assets/js/jquery.unveil.js"></script>
    <script>
    $(function() {
        $(".item img").unveil(300);
    });

</script>
<div class="col s12 m9 l9">

		<div class="row" style="margin-left:auto;margin-right:auto">
		
		<div style="width: 100%; height: 170px; background-image: url(<?php echo base_url();?>assets/img/kategori/kategori.jpg); background-size: cover; padding: 1em 1em 1em 250px; margin-bottom:2em">
			<span style="font-size: 2.5em; font-weight:300; color: #404040">Kategori</span>
			<p style="color: #404040">
				Koleksi atasan trendy dari seve cocok untuk kamu yang bergaya modern
			</p>
			<div class="bcrumbs" style="margin-bottom: 2em;">
				<b style="text-transform: capitalize;">		
					<a href="#">Men</a> /
					<a href="<?php echo base_url();?>categories/<?php echo $category;?>" style="text-transform: capitalize;"><?php echo $category;?></a>
				</b>
			</div>
		</div>
		
               <?php foreach ($produk->result() as $row){ ?>
                    <div class="col s6 m4 l4">
                    <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
                    	<div class="card_1">
                         	<div class="card-image"> 
                         		
                                <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg">
                              	
                            </div>        	
				
                            <div class="card-content">
                               <p class="truncate"><b><?php echo strtoupper($row->nama_produk);?></b></p>
                               <p class="truncate"><?php echo strtoupper($row->brand);?></p>
                               <?php $yang_asli =$row->harga;?>
                               <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
                               <?php $harga_asli = number_format ($yang_asli, 0, '','.');?>
                               <p style="text-decoration:line-through"><?php if($yang_asli!=$yang_tampil){?>
                               Rp <?php echo $harga_asli;?> 
                               <?php } else echo "<br>";?></p> 
                               <p style="text-align: left; font-weight: bold; color: #e45d25">
                               <?php if($row->diskon!=0){?>
                               <span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;"><?php echo $row->diskon?>% OFF</span>
                               <?php } ?>
                               <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
                               Rp <?php echo $format_indonesia?></p> 

                         	</div>
                    	</div>
                    	</a>
                    </div>
               <?php } ?>
        </div>
    
    
	</div>
</div>
</div>
<div class="container">
<div class="row" style="margin-top: 3em">
     	<div class="left hide-on-small-only col s3" style="margin-bottom: 30px; padding-right:2em">

			<h5 style="color: #e45d25"><b>MEN</b></h5>
            		<b>BRANDS LIST</b>
                            
               
	                <ul>
	                     <?php foreach ($brand->result()as $row){ ?>  
	                	<li style="margin-bottom:0.3em; font-size:1em; "><a href="<?php echo base_url();?>brands/detail_brand/<?php echo $row->id_toko;?>" style="color: dimgrey" ><?php echo strtoupper($row->nama_toko);?></a></li>
	                     <?php }?>
	                </ul>

       </div>
       
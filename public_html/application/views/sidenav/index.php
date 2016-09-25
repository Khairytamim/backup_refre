<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>

<div class="container">
<div class="row" style="margin-top: 3em">
     	<div class="left hide-on-small-only col s3" style="margin-bottom: 30px;">
						
			<h5 style="color: #e45d25"><b>MEN</b></h5>
			<b style="text-transform: uppercase"><?php if(isset($category)) echo $category;?></b>
			
                                 
	                <ul style="max-height:40vh; overflow-y: auto;">
	                
	                	<?php foreach ($data->result()as $row){ ?>
	                	<li style="margin-bottom:0.3em; font-size:1em;"><a href="<?php echo base_url();?>categories/<?php echo $category;?>/<?php echo $row->pk_subcategory;?>" style="color:dimgray"><?php echo $row->subcategory;?></a></li>
	                	<?php }?>
	                </ul><br>

	                
	                <b>BRANDS</b>
	                <ul style="height:40vh; margin-top: 1em;">
	                    <div id="testDiv">
	                	<?php foreach ($brand->result()as $row){ ?>
	                	<li style="margin-bottom:0.3em; font-size:1em;"><a href="<?php echo base_url();?>brands/detail_brand/<?php echo $row->id_toko;?>" style="color:dimgray"><?php echo strtoupper($row->nama_toko);?></a></li>
	                	<?php }?>
	                    </div>
	                </ul>
		
       </div>

<script type="text/javascript">
    $(function(){
      $('#testDiv').slimScroll({
          height: 'auto'
      });

    });
</script>
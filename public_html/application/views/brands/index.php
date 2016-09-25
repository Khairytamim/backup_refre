<html>

<body>
<div class="row">
	<div class="col s1">
	<p>  </p>
	</div>
	<div class="col s8" style="margin-top: 20px">
		<H4><center>DAFTAR PAKAIAN</center></H4>
		<div style="display:block; width: 30%; height: 2px; background-color: black; margin-left: auto;margin-right: auto"></div><br><br><br>
		<?php for($j=1; $j<=3; $j++){?>
		<!-- download apss on google-->
		<div class="row">
			<?php for($i=1; $i<=3; $i++){?>
			
			<div class="col s4">
				<div class="card_1">
					<div class="card-image">
						<div class="item"> 
							<img src="<?php echo base_url();?>assets/img/tee1.jpg" style="width:100%">
							<img src="<?php echo base_url();?>assets/img/tee2.jpg" style="width:100%">
							<img src="<?php echo base_url();?>assets/img/tee3.jpg" style="width:100%">
						</div>
					</div>
					<div class="card-content">
                                   		<p><b>lalala</b></p>
                                   		<div style="border-bottom:1px #CCC solid"></div>
                                   		<p align="right">90000</p>
                         		</div>
				</div>
			 </div>
			 
			 <?php }?>
		</div>
		<?php }?>
	</div>
	<div class="col s3"style="margin-top:130px">
	<center>
		<div class="item" style="margin-bottom: 20px">
				<img src="<?php echo base_url();?>assets/img/tee1.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee2.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee3.jpg" style="width:60%; height: 60%">
			 </div>
		<div class="item" style="margin-bottom: 20px">
				<img src="<?php echo base_url();?>assets/img/tee1.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee2.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee3.jpg" style="width:60%; height: 60%">
			 </div>
		<div class="item" style="margin-bottom: 20px">
				<img src="<?php echo base_url();?>assets/img/tee1.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee2.jpg" style="width:60%; height: 60%">
				<img src="<?php echo base_url();?>assets/img/tee3.jpg" style="width:60%; height: 60%">
		</div>
	</center>
	</div>
</div>

	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/hover/hypebeast/jQuery.Brazzers-Carousel.min.js"></script>

	<script>

		$(document).ready(function() {
			$(".item").brazzersCarousel();
		});

	</script>
</body>
</html>
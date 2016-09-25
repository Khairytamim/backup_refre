  <footer style="line-height:1.6;">

  	<div class= "row" style="margin-bottom: 0; padding-top:2em;">
  	   <div class="container">
  	   	<div style="border-top: solid 0.3em #e45d25; width:100%; margin-bottom:2em"></div>
	  	<div class="col s6 m3" style="min-height:10em;">
	  		<div style="display:block; color: #e45d25"><b>SEVE</b></div>
	  		<a class="footlink" href="<?php echo base_url();?>info/aboutus">About Us</a>
	  		<!--a class="footlink" href="<?php echo base_url();?>info/termsandconditions">Terms and Conditions</a-->
	  		<a class="footlink" href="<?php echo base_url();?>info/useragreement">User Agreement</a>
	  		<a class="footlink" href="<?php echo base_url();?>info/privacypolicy">Privacy Policy</a>
	  	</div>
	  	<div class="col s6 m3" style=" min-height:10em">
	  		<div style="display:block; color: #e45d25"><b>HELP</b></div>
	  		<a class="footlink truncate" href="<?php echo base_url();?>info/contactus">Contact US</a>
	  		<a class="footlink" href="<?php echo base_url();?>info/faqs">FAQs</a>
	  		<a class="footlink" href="<?php echo base_url();?>info/tutorial">Tutorial</a>
	  	</div>
	  	<div class="col s6 m3" style="min-height:10em">
	  		<div style="display:block; color: #e45d25" class="truncate"><b>PAYMENT & DELIVERY</b></div>
	  		<a class="footlink" href="http://veritrans.co.id">VERITRANS</a>
	  		<a class="footlink" href="http://jne.co.id">JNE</a>
	  		<!--a class="footlink" href="http://dkurir.com">D&#39KURIR</a-->
	  	</div>
	  	<div class="col s6 m3" style=" min-height:10em">
	  		<div style="display:block; color: #e45d25"><b>SOCIAL MEDIA</b></div>
	  		<a class="footlink" href="https://www.facebook.com/Seve-Indonesia-171566363230435/?fref=nf">Facebook</a>
	  		<a class="footlink" href="http://instagram.com/seveid_com">Instagram</a>
	  		<a class="footlink truncate" href="http://twitter.com/seveid_com">Twitter</a>
	  	</div>
	     </div>
  	</div>
  	<div class="row" style="margin-bottom: 0;">
	  	<div class="col s12 l12" style="background-color: #e45d25; padding:0.5em 0; color: white">
		      <center>
		      <!--<img src="<?php echo base_url();?>assets/img/sosial_media/facebookgrey.png" style="height:2em">
		      <img src="<?php echo base_url();?>assets/img/sosial_media/twittergrey.png" style="height:2em">
		      <img src="<?php echo base_url();?>assets/img/sosial_media/instagramgrey.png" style="height:2em"><br>-->
		      <b>seveid.com</b> | admin@seveid.com</center>
		</div>
  	   </div>
  </footer>
  
  
  
  <!--hover javascript-->
	<script src="<?php echo base_url();?>assets/hover/hypebeast/jQuery.Brazzers-Carousel.min.js"></script>
  <script>
  	$(".item").brazzersCarousel();
  </script>
  <!--
  <script>
	$(document).ready(function () {
	    var $navi = $("#ahoy"), scrollTop = 0;
	    $(window).scroll(function () {
	        var y = $(this).scrollTop(), speed = 0.05, pos = y * speed, maxPos = 100;
	        if (y > scrollTop) {
	            pos = maxPos;
	        } else {
	            pos = 0;
	        }
	        scrollTop = y;
	        $navi.css({
	            "-webkit-transform": "translateY(-" + pos + "%)",
	            "-moz-transform": "translateY(-" + pos + "%)",
	            "-o-transform": "translateY(-" + pos + "%)",
	            "transform": "translateY(-" + pos + "%)"
	        });
	    });
	});
	</script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36251023-1']);
	  _gaq.push(['_setDomainName', 'jqueryscript.net']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>-->
	<style>
	.footlink {
  		color: grey;
  		display: block;
  		transition: 0.2s;
  	}
  	.footlink:hover {
  		opacity: 0.7;
  		transition: 0.2s;
  	}
	</style>
	<script>		
		  // Initialize collapse button
		  $(".button-collapse").sideNav();
		  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
		  //$('.collapsible').collapsible();
	</script>
</body>
</html>
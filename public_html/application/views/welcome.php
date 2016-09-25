<body>
		<aside class="tenniscourt" style="height:225px">
			<div class="text-vertical-center">
				<a href="/user/consult" class="btn btn-light" style="height:90px;color:white"><h1>CONSULT</h1></a>
			</div>
		</aside>
		
		<aside class="gymnastic" style="height:225px">
			<div class="text-vertical-center">
				<a href="/user/profile" class="btn btn-light" style="height:90px;color:white"><h1>PORTFOLIO</h1></a>
			</div>
		</aside>
	
		<aside class="soccercourt" style="height:225px">
			<div class="text-vertical-center">
				<a href="home" class="btn btn-light" style="height:90px;color:white"><h1>SHOP</h1></a>
			</div>
		</aside>
	
         <!-- jQuery -->
            <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script>
            // Scrolls to the selected menu item on the page
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
            </script>
	
	
	
	</body>
</html>
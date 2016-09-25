<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<!--Import materialize.css-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/salvattore_user.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/system_grid.css">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
	<!-- NAVBAR -->
	<div class="col s12">
		<div class="navbar-fixed">
		<nav style="background-color:#263238 ">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">komoland</a>
				<ul id="nav-mobile" class="right side-nav ">
					<li><a href="#">dsd</a></li>
					<li><a href="#"><i class="material-icons">refresh</i></a></li>
					<li><a class='dropdown-button' href='#' data-activates='dropdown1'><i class="material-icons">more_vert</i></a></li>
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href="#!">one</a></li>
						<li><a href="#!">two</a></li>
						<li class="divider"></li>
						<li><a href="#!">three</a></li>
					</ul>
				</ul>
				        <!-- Include this line below -->
        <a style="margin-left:10px" class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
        <!-- End -->
			</div>
		</nav>
	</div>
	</div>

	  <!-- SLIDER -->
  <div class="col s12">    
    <div class="parallax-container">
      <div class="parallax_circle"><img class="circle_profil" src="<?php echo base_url();?>assets/assets/yuna.jpg" alt=""></div>
      <div class="parallax"><img src="<?php echo base_url();?>assets/assets/bromo.jpg"></div>
    </div>    
  </div>

<div class="row">
<div class="col s12 m3 l3">
					<div class="card">
					<div class="card-content">
						<span class="card-title_2 activator grey-text text-darken-4 center">Bromo Comunity</span>
						<span class="card-title activator grey-text  center">My Trip My Adventure</span>
					</div>
					<div class="divider"></div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">FOLLOW<span class="right">100</span></span>
						<div class="divider_2"></div>
						<span class="card-title activator grey-text text-darken-4">FOLLOWER<span class="right">1200</span></span>
						<div class="divider_2"></div>
						<span class="card-title activator grey-text text-darken-4">FAVORITE</span>
						<div class="divider_2"></div>
						<span class="card-title activator grey-text text-darken-4">AGENDA</span>
						          <div class="tagsinput-primary">
            <input name="tagsinput" class="tagsinput" data-role="tagsinput" value="School, Teacher, Colleague" />
          </div>
					</div>
				</div>
</div>

<div class="col s12 m9 l9"> 
	<!-- LIST MENU (KANAN) DAN LIST THUMB -->
	<div class="row">
		<!-- LIST THUMB-->
		<div id="timeline" data-columns >
			<div class="item">
				<!-- album 1 -->
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="<?php echo base_url();?>assets/assets/album_1.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Mount Bromo</span>
						<p>
						<a href="#" class="grey-text v_tiny"><i class="material-icons v_tiny" >thumb_up</i>200</a> 
						<a href="#" class="grey-text v_tiny"><i class="material-icons v_tiny" >public</i>14</a>
						<a href="#" class="right grey-text"><i class="material-icons v_tiny" >star</i></a>
						</p>
					</div>
					<div class="divider"></div>
					<div class="card-content">
					<div class="ava center">
							<img class="profil circle red" src="<?php echo base_url();?>assets/assets/yuna.jpg" width="40px" alt="">
							<span class="ava_content">
								<p class="ava_title grey-text">Bromo Comunity</p>
							</span>
						</div>
					</div>
					<div class="card-reveal">
						<div class="close card-title grey-text text-darken-4"><i class="material-icons right">close</i></div>
						<span class="card-title grey-text text-darken-4">Mount Bromo</span>
						<p class="mini">Here is some more information about this product that is only revealed once clicked on.</p>
						<div class="divider"></div>
						<p class="center"><i class="material-icons">place</i><br>PLACE</p>
						<div class="divider"></div>
						<p class="center"><i class="material-icons">my_location</i><br>GPS FIXED</p>
						<div class="divider"></div>
						<p class="center"><i class="material-icons">photo</i><br>WEATHER</p>
					</div>
				</div>
			</div>
			<div class="item">
				<!-- album 2 -->
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="<?php echo base_url();?>assets/assets/k.jpg">
					</div>
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Justin Bieber<i class="material-icons right">more_vert</i></span>
						<p><a href="#"><i class="material-icons">play_circle_filled</i></a>
							<a href="#"><i class="material-icons right">thumb_up</i></a>
							<a href="#"><i class="material-icons right">thumb_down</i></a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
							<p>Here is some more information about this product that is only revealed once clicked on.</p>
						</div>
					</div>
				</div>
				<div class="item">
					<!-- album 3-->
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="assets/album_3.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Beyonce<i class="material-icons right">more_vert</i></span>
							<p><a href="#"><i class="material-icons">play_circle_filled</i></a>
								<a href="#"><i class="material-icons right">thumb_up</i></a>
								<a href="#"><i class="material-icons right">thumb_down</i></a></p>
							</div>
							<div class="card-reveal">
								<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
								<p>Here is some more information about this product that is only revealed once clicked on.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<!-- album 4 -->
						<div class="card">
							<div class="card-image waves-effect waves-block waves-light">
								<img class="activator" src="assets/album_4.jpg">
							</div>
							<div class="card-content">
								<span class="card-title activator grey-text text-darken-4">David Guetta<i class="material-icons right">more_vert</i></span>
								<p><a href="#"><i class="material-icons">play_circle_filled</i></a>
									<a href="#"><i class="material-icons right">thumb_up</i></a>
									<a href="#"><i class="material-icons right">thumb_down</i></a></p>
								</div>
								<div class="card-reveal">
									<span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
									<p>Here is some more information about this product that is only revealed once clicked on.</p>
								</div>
							</div>                
						</div>
					</div>
				</div>
			</div>
		</div>



				<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
					<a class="btn-floating btn-large red">
						<i class="large material-icons">mode_edit</i>
					</a>
					<ul>
						<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></i></a></li>
						<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
						<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
						<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
					</ul>
				</div>
				<!--Import jQuery before materialize.js-->
				<script src="<?php echo base_url();?>assets/js/salvattore.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
				<script type="text/javascript" src="<?php echo base_url();?>assets/js/flat-ui.js"></script>
				      <script type="text/javascript">
				      $(document).ready(function(){
				        $('.parallax').parallax();
				        $(".button-collapse").sideNav();
				      });
      				  </script>
			</body>
			</html>

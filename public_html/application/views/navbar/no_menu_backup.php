<body>
	
		<div class="navbar-fixed" style="height:3.7em;">
			<nav style="background-color: #00a9d3; height:3.7em; border-bottom: solid 0.35em #0f8cab"><!--#003a75-->
			  <div class="container">
				 <div class="nav-wrapper" style="line-height:3.4em">
				 	<a href="" data-activates="slide-out" class="button-collapse"><img style="width:40px" src="<?php echo base_url();?>assets/assets/menu.svg"></a>
					<a href="<?php echo base_url();?>home" class="brand-logo"><img src="<?php echo base_url();?>assets/img/logo_seve/logo2-01.png" style="margin-top:0.1em; width:60px"></a>         
						<ul class="left hide-on-med-and-down" >
						
						<li><a onclick="openNav()" style="font-size:1em;margin-left:90px; margin-top:10px; margin-bottom:5px; height: 32px; font-size:0.9em; background-color: #0f8cab; "><b>☰ KATEGORI</b></a></li>
						<li style="padding: -10px 1em 0 1em; background-color:rgba(255,255,255,1); margin-top:10px; margin-bottom:5px; height: 32px;">
						    		<form class="hidden-xs hidden-app" action="seveid.com">
			                                		<input type="text" style="border-bottom:none; height:18px;transition:none; width: 300px; color: gray" name="q" class="form-control" placeholder="Search"/>
			                            		</form>
				                	</li>
						</ul>
						
						
						<ul class="right hide-on-med-and-down">
							
							<!--
							<li><a class="modal-trigger" href="#loginmodal" style="font-size:0.9em; ">LOGIN</a></li>
							<li><a class="modal-trigger" href="#signupmodal" style="font-size:0.9em; ">DAFTAR</a></li>
							-->
							
							<li><a href="<?php echo base_url();?>cart" style="font-size:0.9em; "><img src="<?php echo base_url();?>assets/img/cartwhite.png" style="height: 1em; "> CART</a></li>
							<li><a class="dropdown-button" href="#" data-activates="userdropdown" style="font-size:0.9em; "><img src="<?php echo base_url();?>assets/img/userwhite.png" style="height: 1em; color:rgba(0,0,0,0.87)"> USER123</a></li>
							
							
							<ul id="userdropdown" class="dropdown-content">
							    <li><a href="<?php echo base_url();?>user/controlpanel" style="color: rgba(0,0,0,0.87); font-size: 0.9em;">Akun Saya</a></li>
							    <li><a href="#!" style="color: rgba(0,0,0,0.87); font-size: 0.9em; ">Status Pesanan</a></li>
							    <li><a href="#!" style="color: rgba(0,0,0,0.87); font-size: 0.9em; ">Logout</a></li>
							</ul>
						</ul>
						
						
						<ul id="slide-out" class="side-nav">
						      <!--li><b><a href="<?php echo base_url();?>">HOME</a></b></li>
						      <li><b><a class="modal-trigger" href="#loginmodal">LOGIN</a></b></li>
						      <li><b><a class="modal-trigger" href="#signupmodal">DAFTAR</a></b></li-->
						      <li class="no-padding">
						        <ul class="collapsible collapsible-accordion">
						          <li>
						            <a class="collapsible-header">SEMUA KATEGORI<i class="mdi-navigation-arrow-drop-down"></i></a>
						            <div class="collapsible-body">
						              <ul>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion">
				  <li>
					<a class="collapsible-header">MEN<i class="mdi-navigation-arrow-drop-down"></i></a>
					<div class="collapsible-body">
					  <ul>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>ACCESSORIES</u></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/1"style="color:black">Caps</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/2"style="color:black">Bags</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/3"style="color:black">Watches</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/4"style="color:black">Wallets</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/5"style="color:black">Eyewears</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/6"style="color:black">Cases</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/7"style="color:black">Electronis</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>OUTWEARS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/outwears/8" style="color:black">Blazers</a></li>
									<li><a href="<?php echo base_url();?>categories/outwears/9" style="color:black">Hoodies</a></li>
									<li><a href="<?php echo base_url();?>categories/outwears/10" style="color:black">Jackets</a></li>
									<li><a href="<?php echo base_url();?>categories/outwears/11" style="color:black">Knitwears</a></li>
									<li><a href="<?php echo base_url();?>categories/outwears/12" style="color:black">Vest</a></li>
									<li><a href="<?php echo base_url();?>categories/outwears/13" style="color:black">Sweaters</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>TOPS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/tops/14" style="color:black">Shirts</a></li>
									<li><a href="<?php echo base_url();?>categories/tops/15" style="color:black">T-Shirts</a></li>
									<li><a href="<?php echo base_url();?>categories/tops/16" style="color:black">Tank Tops</a></li>
									<li><a href="<?php echo base_url();?>categories/tops/17" style="color:black">Polo</a></li>
									<li><a href="<?php echo base_url();?>categories/tops/18" style="color:black">Dresses</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>BOTTOMS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/bottoms/19"style="color:black">Pants</a></li>
									<li><a href="<?php echo base_url();?>categories/bottoms/20"style="color:black">Shorts</a></li>
									<li><a href="<?php echo base_url();?>categories/bottoms/21"style="color:black">Jeans</a></li>
									<li><a href="<?php echo base_url();?>categories/bottoms/22"style="color:black">Skirts</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>FOOTWEARS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/bottoms/23"style="color:black">Boots</a></li>
									<li><a href="<?php echo base_url();?>categories/bottoms/24"style="color:black">Casual Shoes</a></li>
									<li><a href="<?php echo base_url();?>categories/bottoms/25"style="color:black">Sneakers</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
					  </ul>
					</div>
				  </li>
				  <li>
					<a class="collapsible-header">WOMEN<i class="mdi-navigation-arrow-drop-down"></i></a>
					<div class="collapsible-body">
					  <ul>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>ACCESSORIES</u></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/1" style="color:black">Caps</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/2"style="color:black">Bags</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/3"style="color:black">Watches</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/4"style="color:black">Wallets</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/5"style="color:black">Eyewears</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/6"style="color:black">Cases</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/7"style="color:black">Electronis</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>OUTWEARS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/8"style="color:black">Blazers</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/9"style="color:black">Hoodies</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/10"style="color:black">Jackets</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/11"style="color:black">Knitwears</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/12"style="color:black">Vest</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/13"style="color:black">Sweaters</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>TOPS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/14"style="color:black">Shirts</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/15"style="color:black">T-Shirts</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/16"style="color:black">Tank Tops</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/17"style="color:black">Polo</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/18"style="color:black">Dresses</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>BOTTOMS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/19"style="color:black">Pants</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/20"style="color:black">Shorts</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/21"style="color:black">Jeans</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/22"style="color:black">Skirts</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
						<li class="no-padding">
							<ul class="collapsible collapsible-accordion">
							  <li>
								<a class="collapsible-header" style="color:black"><u>FOOTWEARS</u></i></a>
								<div class="collapsible-body">
								  <ul>
									<li><a href="<?php echo base_url();?>categories/accessories/23"style="color:black">Boots</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/24"style="color:black">Casual Shoes</a></li>
									<li><a href="<?php echo base_url();?>categories/accessories/25"style="color:black">Sneakers</a></li>
								  </ul>
								</div>
							  </li>
							</ul>
						</li>
					  </ul>
					</div>
				  </li>				  
				</ul>
			 </li>

						              </ul>
						            </div>
						          </li>
						        </ul>
						      </li>
							  <li class="no-padding">
								<ul class="collapsible collapsible-accordion">
								  <li>
									<a class="collapsible-header">BRANDS<i class="mdi-navigation-arrow-drop-down"></i></a>
									<div class="collapsible-body">
									  <ul>
										<?php foreach ($brand->result()as $row){ ?>
					                	<li><a href="<?php echo base_url();?>brands/detail_brand/<?php echo $row->id_toko;?>" style="color:black"><?php echo $row->nama_toko;?></a></li>
					                	<?php }?>
									  </ul>
									</div>
								  </li>
								</ul>
							  </li>
		  <li class="no-padding">
			<ul class="collapsible collapsible-accordion">
			  <li>
				<a class="collapsible-header">INFORMATION<i class="mdi-navigation-arrow-drop-down"></i></a>
				<div class="collapsible-body">
				  <ul>
					<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
					  <li>
						<a class="collapsible-header">SEVE</a>
						<div class="collapsible-body">
						  <ul>
							<li><a href="<?php echo base_url();?>info/aboutus" style="color:black">About Us</a></li>
							<li><a href="<?php echo base_url();?>info/termsandconditions" style="color:black">Terms and Conditions</a></li>
							<li><a href="<?php echo base_url();?>info/useragreement" style="color:black">User Agreement</a></li>
							<li><a href="<?php echo base_url();?>info/privacypolicy" style="color:black">Privacy Poicy</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				    </li>
					<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
					  <li>
						<a class="collapsible-header">HELP</a>
						<div class="collapsible-body">
						  <ul>
							<li><a href="<?php echo base_url();?>info/contactus" style="color:black">Contact Us</a></li>
							<li><a href="<?php echo base_url();?>info/faqs" style="color:black">FAQs</a></li>
							<li><a href="<?php echo base_url();?>info/tutorial" style="color:black">Tutorial</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				    </li>
					<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
					  <li>
						<a class="collapsible-header">P&D</a>
						<div class="collapsible-body">
						  <ul>
							<li><a href="https://veritrans.co.id/" style="color:black">VERITRANS</a></li>
							<li><a href="http://www.jne.co.id/home.php" style="color:black">JNE</a></li>
							<li><a href="http://www.dkurir.com/" style="color:black">D&#39KURIR </a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				    </li>
					<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
					  <li>
						<a class="collapsible-header">NEWSLETTER</a>
						<div class="collapsible-body">
						  <ul>
							<li><a href="<?php echo base_url();?>info/discount" style="color:black">About Us</a></li>
							<li><a href="<?php echo base_url();?>info/promocode" style="color:black">Terms and Conditions</a></li>
						  </ul>
						</div>
					  </li>
					</ul>
				    </li>					
				  </ul>
				</div>
			  </li>
			</ul>
		  </li>
						    </ul>						 
				 </div>
              </div>
			</nav>
			
		</div>
	

	
	<div id="dimbg" onclick="closeNav()"></div>
	<div id="catdropdown">
  	  <a href="javascript:void(0)" onclick="closeNav()" style="color: #e45d25;font-size:30px;cursor:pointer; position:absolute; right:1em; top:0.3em;">x</a>
	  <div class="container" style="padding-top: 1.5em">
	    <div class="row" style="margin-bottom: 0;">
		<div class="col s6">
			<b style="color: #00a9d3">MEN</b>
		</div>
		<div class="col s6">
			<b style="color: #00a9d3">WOMEN</b>
		</div>
	    </div>
	    <div class="row" >
	    	
		<div class="col s3">
		   <ul>
			<li><a class="kategori" href="<?php echo base_url();?>categories/accessories">Accessories</a></li>
			<li><a class="kategori" href="<?php echo base_url();?>categories/outwears">Outwears</a></li>
			<li><a class="kategori" href="<?php echo base_url();?>categories/tops">Tops</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a class="kategori" href="<?php echo base_url();?>categories/bottoms">Bottoms</a></li>
			<li><a class="kategori" href="<?php echo base_url();?>categories/footwears">Footwears</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a class="kategori" href="#">Accessories</a></li>
			<li><a class="kategori" href="#">Outwears</a></li>
			<li><a class="kategori" href="#">Tops</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a class="kategori" href="#">Bottoms</a></li>
			<li><a class="kategori" href="#">Footwears</a></li>
		   <ul>
		</div>
		
	    </div>
	  </div>
	</div>
	


<div id="loginmodal" class="modal">
    <div class="modal-content">
      <div class="row">
       
         <div class="col l4 m12 s12" style="padding: 1em">
            <h4>Login</h4>
            <p>Silahkan masukkan data diri anda untuk dapat berbelanja</p>
         </div>
         <div class="col l8 m12 s12" style="padding: 1em">
            <form class="col s12" action="<?php echo base_url();?>Home/verifikasi_login_user" method="post">
                      <div class="input-field col s12">
                         <input name="email" type="text" placeholder="e.g. fikry@seveid.com">
                         <label >Email</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="password" type="password" placeholder="*****">
                         <label>Password</label>
                      </div>
                       <button type="submit" class="waves-effect waves-light btn" style="margin-top: 2em">LOGIN</button> 
                       <!--button type="submit" class="waves-effect waves-light btn btn-red" style="margin-top: 2em">LOGIN GOOGLE</button-->
            </form>
         </div>
      </div>
 
    </div>
</div>

<div id="signupmodal" class="modal">
    <div class="modal-content">
      <div class="row">
         <div class="col l4 m12 s12" style="padding: 1em; ">
            <h4>Daftar</h4>
            <p>Isi data-data anda dengan benar untuk kemudahan dan kenyamanan transaksi anda</p>
         </div>
         <div class="col l8 m12 s12" style="padding: 1em 1em 0 1em">
            <form class="col s12" action="<?php echo base_url();?>Daftarmember/registration" method="post">
                      <div class="input-field col s12">
                         <input name="nama" type="text" class="validate" placeholder="e.g. Fikry Khairytamim">
                         <label>Nama</label>
                      </div>
                      <div class="input-field col s12">
                         <input name="email" type="text" class="validate" placeholder="e.g. fikry@seveid.com">
                         <label>Email</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="no_hp" type="text" class="validate" placeholder="+6281703434377">
                         <label>Nomor HP</label>
                      </div>
                      <div class="input-field col s12">
                      <input name="alamat" type="text" class="validate"  placeholder="Jalan TB Simatupang Raya 60111">
                      <label >Alamat dan Kode Pos</label>
                      </div>
                      <div class="input-field col s6">
                         <input name="password" type="password" class="validate" placeholder="*****">
                         <label>Sandi</label>
                      </div>
                      <div class="input-field col s12 l6">
                         <input name="con_password" type="password" class="validate" placeholder="*****">
                         <label>Ketik Ulang Sandi</label>
                      </div>
                      <!-- div class="input-field col s12 l6">
                          <input type="date" class="datepicker">
                         <label>Tanggal Lahir</label>
                      </div -->
                      <p class="col s12" style="margin-top: 1.25em">
 	                 <input type="checkbox" class="filled-in" id="filled-in-box" />
                         <label for="filled-in-box">Saya setuju dengan syarat dan ketentuan <b>seveid.com</b></label>
                      </p>
                      <div class="col s12" style="margin-top: 1.25em">
                         <button type="submit" class="waves-effect waves-light btn">DAFTAR</button>
                         <!--button type="submit" class="waves-effect waves-light btn btn-red">DAFTAR DENGAN GOOGLE</button-->
                      </div>
            </form>
         </div>
      </div>
 
    </div>
</div>


    </div>
  </div>
  

	
	<script>
	var opened = false;
	function openNav() {
	    if (opened == true) closeNav()
	    else {
	       document.getElementById("catdropdown").style.height= "12em";
	       document.getElementById("catdropdown").style.opacity= "1";
	       document.getElementById("dimbg").style.display= "block";
	       opened = true;
	       }
	}
	
	function closeNav() {
	    if (opened == true) {
	    	document.getElementById("catdropdown").style.height = "0";
	    	document.getElementById("catdropdown").style.opacity= "0";
	    	document.getElementById("dimbg").style.display= "none";
	    	opened = false;
	    	}
	}
	
	$('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15 // Creates a dropdown of 15 years to control year
	  });
  
	  $(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal-trigger').leanModal();
	  });
  
	  $('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
	  	constrain_width: false, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left' // Displays dropdown with edge aligned to the left of button
		}
		);
	</script>
	

	
	<style>
	    a.kategori {color: dimgray; transition: 0.2s;}
	    #a {color: rgba(228,93,37,0.87);}
	     a:hover.kategori {opacity: 0.6; transition: 0.2s;}
	    #catdropdown{background-color:white; position: fixed; width: 100%; z-index:100; overflow:hidden; height: 0px; transition:0.3s; opacity: 0;}
	    #dimbg{position:fixed; width:100%; background-color:rgba(0,0,0,0.5); z-index:95; height:100%; display: none}
	</style>
	
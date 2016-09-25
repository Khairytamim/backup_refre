<body>
	
		<div class="navbar-fixed" style="height:3.4em;">
			<nav style="background-color:#00a9d3;height:3.4em; border-bottom:3px #e45d25 solid"><!--#003a75-->
			  <div class="">
				 <div class="nav-wrapper" style="line-height:3.4em">
				 	<a href="" data-activates="slide-out" class="button-collapse"><img style="width:40px" src="<?php echo base_url();?>assets/assets/menu.svg"></a>
					<a href="<?php echo base_url();?>home" class="brand-logo"><img src="<?php echo base_url();?>assets/img/logo_seve/logo2-01.png" style="margin-top:-0.2em; width:80px"></a>         
						<ul class="left hide-on-med-and-down" >
						<!--li><a href="<?php echo base_url();?>home" class="brand-logo" style="background-color:transparent"><img src="<?php echo base_url();?>assets/img/logo_seve/logo.png" style="margin-top:0.6em; width:80px"></a></li-->
						<li><a onclick="openNav()" style="font-size:1em;margin-left:70px"><b>☰ SEMUA KATEGORI</b></a></li>
						</ul>
						<ul class="right hide-on-med-and-down">
							<li style="padding: 0 1em 0 1em; background-color:rgba(255,255,255,0.1);">
						    		<form class="hidden-xs hidden-app" action="seveid.com">
			                                		<input type="text" style="border-bottom:none; height:18px;transition:none" name="q" class="form-control" placeholder="Search"/>
			                            		</form>
				                	</li>
							<li><a class="modal-trigger" href="#loginmodal" style="font-size:0.8em">LOGIN</a></li>
							<li><a class="modal-trigger" href="#signupmodal" style="font-size:0.8em">DAFTAR</a></li>
							<li><a href="<?php echo base_url();?>cart" style="font-size:0.8em"><img src="<?php echo base_url();?>assets/img/cartwhite.png" style="height: 1em"> CART</a></li>
							<li><a class="dropdown-button" href="#" data-activates="userdropdown" style="font-size:0.8em"><img src="<?php echo base_url();?>assets/img/userwhite.png" style="height: 1em"> USER123</a></li>
							
							
							<ul id="userdropdown" class="dropdown-content">
							    <li><a href="<?php echo base_url();?>user/controlpanel" style="color: rgba(0,0,0,0.87); font-size: 0.8em;">Akun Saya</a></li>
							    <li><a href="#!" style="color: rgba(0,0,0,0.87); font-size: 0.8em;">Status Pesanan</a></li>
							    <li><a href="#!" style="color: rgba(0,0,0,0.87); font-size: 0.8em;">Logout</a></li>
							</ul>
						</ul>
						<ul id="slide-out" class="side-nav">
						      <li><b><a href="<?php echo base_url();?>">HOME</a></b></li>
						      <li><b><a class="modal-trigger" href="#loginmodal">LOGIN</a></b></li>
						      <li><b><a class="modal-trigger" href="#signupmodal">DAFTAR</a></b></li>
						      <li class="no-padding">
						        <ul class="collapsible collapsible-accordion">
						          <li>
						            <a class="collapsible-header"><b>SEMUA KATEGORI</b></a>
						            <div class="collapsible-body">
						              <ul>
						              	<li><b><a>MEN</a></b></li>
						              	<li><a href="<?php echo base_url();?>categories/accessories">ACCESSORIES</a></li>
						                <li><a href="<?php echo base_url();?>categories/outwears">OUTWEARS</a></li>
						                <li><a href="<?php echo base_url();?>categories/tops">TOPS</a></li>						                
						                <li><a href="<?php echo base_url();?>categories/bottoms">BOTTOMS</a></li>
						                <li><a href="<?php echo base_url();?>categories/footwears">FOOTWEARS</a></li>
						                <li><b><a>WOMEN</a></b></li>
						              	<li><a href="<?php echo base_url();?>categories/accessories">ACCESSORIES</a></li>
						                <li><a href="<?php echo base_url();?>categories/accessories">OUTWEARS</a></li>
						                <li><a href="<?php echo base_url();?>categories/accessories">TOPS</a></li>						                
						                <li><a href="<?php echo base_url();?>categories/accessories">BOTTOMS</a></li>
						                <li><a href="<?php echo base_url();?>categories/accessories">FOOTWEARS</a></li>
						              </ul>
						            </div>
						          </li>
						        </ul>
						      </li>
						      <li class="no-padding">
						        <ul class="collapsible collapsible-accordion">
						          <li>
						            <a class="collapsible-header"><b><?php echo $banner;?></b></a>
						            <div class="collapsible-body">
						              <ul>
					             		<?php for ($i = 0; $i < 4 ; $i++) {?>
								    <li><a href="<?php echo base_url();?>" style="color:black"><?php echo $seve[$i];?></a></li>
								<?php }?>
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
  	  <a href="javascript:void(0)" onclick="closeNav()" style="font-size:30px;cursor:pointer; position:absolute; right:1em; top:0.3em;">x</a>
	  <div class="container" style="padding-top: 1.5em">
	    <div class="row" style="margin-bottom: 0;">
		<div class="col s6">
			<b>MEN</b>
			<hr style="border-style:solid; border-width:0 0 1px 0; border-color: rgba(255,255,255,0.2);">
		</div>
		<div class="col s6">
			<b>WOMEN</b>
			<hr style="border-style:solid; border-width:0 0 1px 0; border-color: rgba(255,255,255,0.2);">
		</div>
	    </div>
	    <div class="row" >
	    	
		<div class="col s3">
		   <ul>
			<li><a href="<?php echo base_url();?>categories/accessories">Accessories</a></li>
			<li><a href="<?php echo base_url();?>categories/outwears">Outwears</a></li>
			<li><a href="<?php echo base_url();?>categories/tops">Tops</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a href="<?php echo base_url();?>categories/bottoms">Bottoms</a></li>
			<li><a href="<?php echo base_url();?>categories/footwears">Footwears</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a href="#">Accessories</a></li>
			<li><a href="#">Outwears</a></li>
			<li><a href="#">Tops</a></li>
		   <ul>
		</div>
		<div class="col s3">
		   <ul>
			<li><a href="#">Bottoms</a></li>
			<li><a href="#">Footwears</a></li>
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
            <form>
                      <div class="input-field col s12">
                         <input name="ukuran" type="text" placeholder="e.g. user123">
                         <label for="alamat">Username/Email</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="nama_transaksi" type="text" placeholder="*****">
                         <label for="nama_pembeli">Password</label>
                      </div>
                       <button type="submit" class="waves-effect waves-light btn" style="margin-top: 2em">LOGIN</button> 
                       <button type="submit" class="waves-effect waves-light btn btn-red" style="margin-top: 2em">LOGIN GOOGLE</button>
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
            <form>
                      <div class="input-field col s6">
                         <input type="text" placeholder="e.g. John Smith">
                         <label>Nama</label>
                      </div>
                      <div class="input-field col s6">
                         <input type="text" placeholder="e.g. john@smith.com">
                         <label>Email</label>
                      </div>
                      <div class="input-field col s6">
                         <input type="text" placeholder="*****">
                         <label>Sandi</label>
                      </div>
                      <div class="input-field col s6">
                         <input type="text" placeholder="*****">
                         <label>Ketik Ulang Sandi</label>
                      </div>
                      <div class="input-field col s6">
                          <input type="date" class="datepicker">
                         <label>Tanggal Lahir</label>
                      </div>
                      <p class="col s12" style="margin-top: 1.25em">
 	                 <input type="checkbox" class="filled-in" id="filled-in-box" />
                         <label for="filled-in-box">Saya setuju dengan syarat dan ketentuan <b>seveid.com</b></label>
                      </p>
                      <div class="col s12" style="margin-top: 1.25em">
                         <button type="submit" class="waves-effect waves-light btn">DAFTAR</button>
                         <button type="submit" class="waves-effect waves-light btn btn-red">DAFTAR DENGAN GOOGLE</button>
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
	       document.getElementById("dimbg").style.height= "100%";
	       opened = true;
	       }
	}
	
	function closeNav() {
	    if (opened == true) {
	    	document.getElementById("catdropdown").style.height = "0";
	    	document.getElementById("dimbg").style.height= "0";
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
	    a {color: rgba(255,255,255,0.87);}
	    #a {color: rgba(228,93,37,0.87);}
	    a:hover {color: white;}
	    #catdropdown{background-color:black; position: fixed; color:white; width: 100%; z-index:100; overflow:hidden; height: 0px; transition:0.5s;}
	    #dimbg{position:fixed; width:100%; background-color:rgba(0,0,0,0.5); z-index:95; height:0;}
	</style>
	
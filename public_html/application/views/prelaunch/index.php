<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="iXeuDSWh4LPaiEFS54cAl5IWl1JyGEuqh-KAXFRFH_Q"/>
    <title>séve / cari dan buat gayamu.</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/Icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/Icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/Icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/Icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/Icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/Icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/Icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/Icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/Icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/Icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/Icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/Icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/Icon/favicon-16x16.png">
    
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dropzone/demos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.css"  media="screen,projection" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dropzone/dropzone.js"></script>
    
    <!--Let browser know website is optimized for mobile-->
    <meta charset="utf-8"  name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

    <style>
        html {
            font-family: Raleway;
        }
        .navbar-prelaunch {
            background-color: rgba(255,255,255,0.3);
            height:4em;
            position: fixed;
            width: 100%;
            text-align: center;
        }
        .logo-prelaunch {
            height: 2.5em;
            margin-top: 0.75em;
        }
        .parallax-container {
            color: #ffffff;
            padding-top: 6em;
        }
        .textbox {
            //background-color: rgba(255,255,255,0.2);
            padding: 0.5em;
            margin-top: 2.5em;
            border-style: solid;
            border-color: white;
            //border-radius: 10px;
        }
        .fullpage {
            min-height: 44em;
        }
        .fullabsolutepage {
            height: 44em;
        }
        .seveblue {
            background-color: #003a75;
            color: #ffffff;
        }
        .paddedrow {
            padding-top: 5.5em;
            text-align: center;
        }
        .brandlogo {
            height: 6em;
        }
    </style>
</head>
    
<body>
    <div class="navbar-prelaunch">
        <a ahref="<?php echo base_url();?>home" class="brand-logo" style="color:black; font-family:AvantGarde; font-size:40px">R E F R E</a>  
    </div>
    
    <div class="parallax-container fullpage">
        <div class="parallax"><img src="<?php echo base_url();?>assets/img/parallax1_1.png"></div>
        <div class="container paddedrow row">
            <h1 style="color:black"><b>the wait is nearly over.</b></h1>
            
            <h5 style="color:black">The First Fashion Consultant Online is coming to earth.</h5>    
        
            <div class="col m4 offset-m4 s12">
                <div class="textbox">
                    <b style="color:black">COMING SOON | SEPTEMBER 25<sup>th</sup> 2016</b>
                </div>
            </div>
        </div>
    </div>
    
   
    <div class="">
        <!--img src="<?php echo base_url();?>assets/img/banner web-01.png" style="width:100%"-->
    </div>
    
    <div class="parallax-container" style="height: 20em; background-color: rgba(255,255,255,0.2); padding-top: 1em;">
        <div class="parallax"><img src="<?php echo base_url();?>assets/img/parallax2_1.png"></div>
        <div class="container row" style="text-align: center; color: black">
    <p>
        <b>Pick and get the freedom of your own style and feel the experience of real clothing stores at your home!</b>
    </p>
         <div style="background-color:transparent">
            <!--h5><b>Go buy and support these local brands</b></h5-->
                 <form action="<?php echo base_url();?>Comingsoon/firstuser" method="post">
                     <div class="row">
                        <div class="input-field col s12">
                           <input autofocus name="emailuser" id="emailuser" type="email">
                           <label class="active" for="emailuser">Email</label>
                           <button type="submit" class="btn">Subscribe</button>
                        </div>    
                    </div>
                 </form>
         </div>
        </div>
    </div>
    	
    <footer style="color: dimgray; background-color: #e0e0e0; height: 3em; padding-top: 1em;">
        <div class="container" style="font-size: 11pt; text-align: center"><b>seveid.com</b> | admin@seveid.com</div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.parallax').parallax();
        });
        $(document).ready(function(){
            $(this).scrollTop(0);
        });
    </script>
    
</body>
    
</html>
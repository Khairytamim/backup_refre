<body>
    <div class="navbar-fixed">
        <nav style="background-color:white; color:black;">
            <div class="nav-wrapper">
                <a href="profile" class="brand-logo center" style="color:black; font-family:AvantGarde">R E F R E</a>
                <div id="burger">=</div>
            </div>
        </nav>
    </div>
    
    <section>
        <div class="row" id="headline">
            <div class="container">
                <div class="col s12" style="padding-top:3em; padding-bottom:3em; text-align:center">
                    <img class="circle-clip" src="<?php echo base_url();?>assets/imgrefre//pp.png" style="height:9em">
<!--                    <h4>Welcome Back</h4>-->
                    <h4>Andi Ersaldy Raisha</h4>
                    <p>Subscribed User</p>
                    <h6>
                        <b><img src="<?php echo base_url();?>assets/imgrefre/ui/heart.png" style="height:1em"> 4.312</b>
                        <b style="margin-left:1em"><img src="<?php echo base_url();?>assets/imgrefre/ui/view.png" style="height:1em"> 11.212</b>
                    </h6>
                </div>
            </div>
        </div>
        <div class="row" id="mode-select">
            <div class="container">
                <div class="col s4 offset-s2 m3 offset-m3">
                    <a href="http://seveid.com/home"><img src="<?php echo base_url();?>assets/imgrefre/ui/shop.png" style="height:5em"></a>
                    <br>
                    <b>Shop</b>
                </div>
                <div class="col s4 m3">
                    <a href="consult"><img src="<?php echo base_url();?>assets/imgrefre/ui/consult.png" style="height:5em"></a>
                    <br>
                    <b>Consult</b>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:2em">
            <div class="container">
<!--                <center style="margin-bottom:2em; letter-spacing:5px;"><h5>MY COLLECTION</h5></center>-->
<!--                <div class="divider" style="height: 3px; background-color: black; margin-top:0.5em"></div>-->
                
                <div class="col s12" style="margin-bottom: 2em; padding:0">
                    <ul class="tabs">
                        <li class="tab col s3 tab-accent-black"><a class="active" href="#upload"><b>My Uploads</b></a></li>
                        <li class="tab col s3 tab-accent-black"><a href="#collection"><b>My Collections</b></a></li>
                    </ul>
                </div>
                
                <div class="col s12" id="upload" style="padding:0">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <a href="collection-detail" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="<?php echo base_url();?>assets/imgrefre//collection-thumb/1.jpg" class="collection-thumb">
                                <div class="collection-info">
                                    <b><img src="<?php echo base_url();?>assets/imgrefre/ui/heart.png" style="height:1em"> 4.444</b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col s12" id="collection" style="padding:0">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <a href="collection-detail" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="<?php echo base_url();?>assets/imgrefre//collection-thumb/1.jpg" class="collection-thumb">
                                <div class="collection-info">
                                    <b><img src="<?php echo base_url();?>assets/imgrefre/ui/heart.png" style="height:1em"> 3.333</b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </section>
    <footer class="page-footer" style="background-color:rgb(20,20,20); margin-top:5em; padding:0">
        <div class="footer-copyright" style="background-color:black">
            <div class="container" style="text-align: left;">
                <a href="#!"><img src="<?php echo base_url();?>assets/imgrefre/ui/ig.png" style="height: 2em; vertical-align:middle; margin-right:0.5em"></a>
                <a href="#!"><img src="<?php echo base_url();?>assets/imgrefre/ui/fb.png" style="height: 2em; vertical-align:middle; margin-right:1.5em"></a>
                <a href="#!" class="footlink">ABOUT US</a>
                <a href="#!" class="footlink">FAQ</a>
                <a href="#!" class="footlink">TERMS</a>
    <!--            <a href="#!" class="footlink">FB</a>-->
    <!--            <a href="#!">INSTAGRAM</a>-->
                <a class="grey-text text-lighten-4 right" href="#!" style="font-family:AvantGarde; letter-spacing:5px;">REFRE <b>2016</b></a>
            </div>
        </div>
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
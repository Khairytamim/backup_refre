<!DOCTYPE html>
<html>
<head>
    <?php include "../parts/head.php"; ?>
</head>
<body>
    <?php include "../parts/navbar.php"; ?>
    
    <section>
        <div class="row" id="headline">
            <div class="container">
                <div class="col s12" style="padding-top:3em; padding-bottom:3em; text-align:center">
                    <img class="circle-clip" src="../assets/img/pp.png" style="height:9em">
<!--                    <h4>Welcome Back</h4>-->
                    <h4>Andi Ersaldy Raisha</h4>
                    <p>Subscribed User</p>
                    <h6>
                        <b><img src="../assets/img/ui/heart.png" style="height:1em"> 4.312</b>
                        <b style="margin-left:1em"><img src="../assets/img/ui/view.png" style="height:1em"> 11.212</b>
                    </h6>
                </div>
            </div>
        </div>
        <div class="row" id="mode-select">
            <div class="container">
                <div class="col s4 offset-s2 m3 offset-m3">
                    <a href="#!"><img src="../assets/img/ui/shop.png" style="height:5em"></a>
                    <br>
                    <b>Shop</b>
                </div>
                <div class="col s4 m3">
                    <a href="consult.php"><img src="../assets/img/ui/consult.png" style="height:5em"></a>
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
                    <a href="collection-detail.php" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="../assets/img/collection-thumb/1.jpg" class="collection-thumb">
                                <div class="collection-info">
                                    <b><img src="../assets/img/ui/heart.png" style="height:1em"> 4.444</b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col s12" id="collection" style="padding:0">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <a href="collection-detail.php" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="../assets/img/collection-thumb/1.jpg" class="collection-thumb">
                                <div class="collection-info">
                                    <b><img src="../assets/img/ui/heart.png" style="height:1em"> 3.333</b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </section>
    <?php include "../parts/footer.php"; ?>
    
    
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
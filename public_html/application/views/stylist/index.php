<body>
    <div class="navbar-fixed">
        <nav style="background-color:white; color:black; box-shadow: none">
            <div class="nav-wrapper">
                <a href="../user/profile.php" class="brand-logo center" style="color:black; font-family:AvantGarde">R E F R E</a>
                <div id="burger">=</div>
            </div>
        </nav>
        <nav style="background-color:white; color:black; box-shadow: none; top:56px; height:48px; border-bottom: solid lightgrey 1px">
            <div class="row">
                <div class="col s12" style="margin-bottom: 2em; padding:0">
                    <ul class="tabs" style="background-color: transparent; overflow:hidden">
                        <li class="tab col s3"><a class="active" href="#chats" style="background-color:transparent"><b>Chats</b></a></li>
                        <li class="tab col s3"><a href="#history" style="background-color:transparent"><b>History</b></a></li>
                        <li class="tab col s3"><a href="#profile" style="background-color:transparent"><b>Profile</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section style="margin-top: 65px">
        <div class="container">
            <div id="chats">
                <ul class="collection">
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Rully Soelaiman</b></span>
                            <p class="truncate" style="max-width:70%">
                                25 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Chastine Fatichah</b></span>
                            <p class="truncate" style="max-width:70%">
                                21 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/blazer.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Rizky Januar Akbar</b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Nanik Suciati</b></span>
                            <p class="truncate" style="max-width:70%">
                                19 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                </ul>
            </div>
            <div id="history">
                <ul class="collection">
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Rizky Januar Akbar</b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Nanik Suciati</b></span>
                            <p class="truncate" style="max-width:70%">
                                19 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="stylist/chat" style="color:black">
                        <li class="collection-item avatar">
                            <img src="<?php echo base_url();?>assets/imgrefre/pp.png" alt="" class="circle">
                            <span class="title"><b>Chastine Fatichah</b></span>
                            <p class="truncate" style="max-width:70%">
                                21 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="<?php echo base_url();?>assets/imgrefre/category-thumb/blazer.jpg" style="width:3em"></a>
                        </li>
                    </a>
                </ul>
            </div>
            <div id="profile" style="text-align:center; margin-top: 6em">
                <img src="<?php echo base_url();?>assets/imgrefre/collection-thumb/1.jpg" class="circle" style="width:40%; margin-bottom:1em">
                <h5><b>Andi Ersaldy Raisha</b></h5>
                <p>Student Fasihion Stylist</p>
            </div>
        </div>
    </section>    
    
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
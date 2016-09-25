<!DOCTYPE html>
<html>
<head>
    <?php include "../parts/head.php"; ?>
</head>
<body>
    <?php include "../parts/navbar-stylist.php"; ?>
    <section style="margin-top: 65px">
        <div class="container">
            <div id="chats">
                <ul class="collection">
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Rully Soelaiman</b></span>
                            <p class="truncate" style="max-width:70%">
                                25 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Chastine Fatichah</b></span>
                            <p class="truncate" style="max-width:70%">
                                21 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/blazer.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Rizky Januar Akbar</b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Nanik Suciati</b></span>
                            <p class="truncate" style="max-width:70%">
                                19 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                </ul>
            </div>
            <div id="history">
                <ul class="collection">
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Rizky Januar Akbar</b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Nanik Suciati</b></span>
                            <p class="truncate" style="max-width:70%">
                                19 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Chastine Fatichah</b></span>
                            <p class="truncate" style="max-width:70%">
                                21 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/img/category-thumb/blazer.jpg" style="width:3em"></a>
                        </li>
                    </a>
                </ul>
            </div>
            <div id="profile" style="text-align:center; margin-top: 6em">
                <img src="../assets/img/collection-thumb/1.jpg" class="circle" style="width:40%; margin-bottom:1em">
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
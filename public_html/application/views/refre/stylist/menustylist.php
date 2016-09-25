<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php 
      $this->load->view('refre/parts/navbar-stylist'); 
    ?>
    <section style="margin-top: 65px">
        <div class="container">
            <div id="chats">
                <ul class="collection">
                    <?php foreach ($list_consult->result() as $key) {?>
                    <a href="accept_chat/<?php echo $key->id_chatroom;?>" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/refre/pp/<?php echo $key->user;?>.jpg" alt="" class="circle">
                            <span class="title"><b><?php echo $key->nama_user;?></b></span>
                            <p class="truncate" style="max-width:70%">
                                25 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/refre/img/category-thumb/<?php echo $key->nama_gambar;?>" style="width:3em"></a>
                        </li>
                    </a>
                    <?php }?>

                    <!--a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/refre/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Chastine Fatichah</b></span>
                            <p class="truncate" style="max-width:70%">
                                21 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/refre/img/category-thumb/blazer.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/refre/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Rizky Januar Akbar</b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/refre/img/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <a href="chat.php" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/refre/img/pp.png" alt="" class="circle">
                            <span class="title"><b>Nanik Suciati</b></span>
                            <p class="truncate" style="max-width:70%">
                                19 y/o<br>
                                Woman
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/refre/img/category-thumb/bag.jpg" style="width:3em"></a>
                        </li>
                    </a-->
                </ul>
            </div>
            <div id="history">
                <ul class="collection">
                    <?php foreach ($list_history->result() as $row) {?>
                    <a href="history_chat/<?php echo $row->id_chatroom;?>" style="color:black">
                        <li class="collection-item avatar">
                            <img src="../assets/img/refre/pp/<?php echo $row->user;?>.jpg" alt="" class="circle">
                            <span class="title"><b><?php echo $row->nama_user;?></b></span>
                            <p class="truncate" style="max-width:70%">
                                24 y/o<br>
                                Man
                            </p>
                            <a href="#!" class="secondary-content"><img src="../assets/refre/img/category-thumb/bottoms.jpg" style="width:3em"></a>
                        </li>
                    </a>
                    <?php }?>
                </ul>
            </div>
            <div id="profile" style="text-align:center; margin-top: 6em">
                <img src="../assets/refre/img/collection-thumb/1.jpg" class="circle" style="width:40%; margin-bottom:1em">
                <div style="font-size:1.5em"><b><?php if($this->session->userdata('nama_stylist') != null){ ?>
                <a href="/refre/logout" class="waves-effect waves-light btn" style="margin-bottom:0.5em; background-color:black">LOG OUT</a>
                <h4><?php echo $this->session->userdata('nama_stylist');?></h4><?php } ?></b></div>
                <div style="margin-bottom:1em">Fashion Stylist</div>
                <a href="/refre/portfolio" class="waves-effect waves-light btn" style="margin-bottom:0.5em; background-color:black">PORTFOLIO</a>
                <div style="border: solid 1px lightgrey; padding:1em">
                    <b>Points</b>: 1520<br>
                    <b>Last Withdraw</b>: 15/Jun/2016<br>
                    <a href="#!" class="waves-effect waves-light btn" style="margin-top:0.5em; background-color:black">WITHDRAW POINTS</a>
                </div>
                
            </div>
        </div>
    </section>    
    
    
    <script src="../assets/refre/js/jquery.min.js"></script>
    <script src="../assets/refre/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
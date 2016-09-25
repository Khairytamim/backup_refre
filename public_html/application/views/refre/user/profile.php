<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php
      $this->load->view('refre/parts/navbar');
    ?>
    
    <section>	
        <div class="row" id="headline">
            <div class="container">
                <div class="col s12" style="padding-top:3em; padding-bottom:3em; text-align:center">
                    <a href="<?php echo base_url();?>refre/uploadpp"><img class="rectangle-clip" src="<?php echo base_url();?>assets/img/refre/pp/<?php echo $this->session->userdata('id_user');?>.jpg" style="width:9em"></a>
                    <?php if($this->session->userdata('nama_user') != null){ ?>
                    <a href="<?php echo base_url();?>refre/controlpanel" style="color:white"><h4><?php echo $this->session->userdata('nama_user');?></h4></a>

                    <a href="/refre/logout" class="waves-effect waves-light btn" style="margin-top:0.5em; background-color:black">LOG OUT</a><a href="/refre/refre_upload" class="waves-effect waves-light btn hide-on-large-only" style="margin-top:0.5em; background-color:black">Upload</a>

                    <p>Subscribed User</p>
                    <!--h6>
                        <b><img src="../assets/refre/img/ui/heart.png" style="height:1em"> <?php echo $like;?></b>
                        <b style="margin-left:1em"><img src="../assets/refre/img/ui/view.png" style="height:1em"> 11.212</b>
                    </h6-->
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row" id="mode-select">
            <div class="container">
                <!--div class="col s4 m3">
                    <a href="<?php echo base_url();?>home"><img src="../assets/refre/img/ui/shop.png" style="height:5em"></a>
                    <br>
                    <b>Shop</b>
                </div-->
                <div class="col s6 m6 hide-on-large-only">
                    <a href="/refre/consult"><img src="../assets/refre/img/ui/consult.png" style="height:5em"></a>
                    <br>
                    <b>Consult</b>
                </div>
                <div class="col s6 m6 l12">
                    <a href="/refre/portfolio"><img src="../assets/refre/img/ui/resume.png" style="height:5em"></a>
                    <br>
                    <b>Portfolio</b>
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
                    <?php foreach ($myuploads->result() as $row){ ?>
                    <a href="<?php echo base_url();?>refre/collection_detail/<?php echo $row->id_foto;?>" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="../assets/img/refre/<?php echo $row->foto?>" class="collection-thumb" style="width:100px;margin-top:20px">
                                <div class="collection-info">
                                    <b style="margin-right:0.5em"><img src="../assets/refre/img/ui/heart.png" style="height:1em"> <?php if($like1==0 || empty($like1[$row->id_foto])) {echo'0';} else echo $like1[$row->id_foto];?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col s12" id="collection" style="padding:0">
                    <?php foreach ($dilike->result() as $row){ ?>
                        <a href="<?php echo base_url();?>refre/collection_detail/<?php echo $row->id_foto;?>" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="../assets/img/refre/<?php echo $row->foto?>" class="collection-thumb" style="width:100px;margin-top:20px">
                                <div class="collection-info">
                                    <b style="margin-right:0.5em"><img src="../assets/refre/img/ui/heart.png" style="height:1em"> <?php if($like1==0 || empty($like1[$row->id_foto])) {echo'0';} else echo $like1[$row->id_foto];?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </section>
    <?php
      $this->load->view('refre/parts/footer');
    ?>
    
    
    
    <script src="../assets/refre/js/jquery.min.js"></script>
    <script src="../assets/refre/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
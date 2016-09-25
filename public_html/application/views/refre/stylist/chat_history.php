<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php
      $this->load->view('refre/parts/navbar-chat-stylist');
    ?>
    
    <section style="margin-top: 80px">
        <div class="container" id="pesan">
            <?php 
            foreach ($history->result() as $key) {?>
                <?php if($key->tipe_user!='fashion'){?>
                <div class="bubble-container">
                    <div class="bubble-left"><?php echo $key->pesan ?></div>
                </div>
                <?php }else{?>
                <div class="bubble-container">
                    <div class="bubble-right"><?php echo $key->pesan ?></div>
                </div>
               
            <?php } }?>
        </div>
        <div style="height:84px; float:left; width:100%"></div>
        <!--div id="chat-input">
            <div class="row">
                <div class="container">
                    <div class="col s2">
                        <a href="#!"><img src="../assets/refre/img/ui/up-img.png" style="width:100%; margin-top:1.5em"></a>
                    </div>
                    <div class="input-field col s8">
                        <textarea id="msg" rows="2" style="overflow:scroll; border:none; background:white; padding:0.3em"></textarea>
                    </div>
                    <div class="col s2">
                        <img onClick="kirim_pesan();" src="<?php echo base_url();?>assets/imgrefre/ui/sendb.png" style="width:100%; margin-top:1.5em">
                    </div>
                </div>
            </div>
        </div-->
    </section>
    

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });
    </script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });
    </script>
</body>
</html>
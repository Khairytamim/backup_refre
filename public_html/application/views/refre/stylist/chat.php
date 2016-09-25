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
    		<?php 
    		$waktu_awal = 0;
    		foreach ($now->result() as $k) {?>
            		<?php $waktu_awal = $waktu_awal + strtotime($k->sekarang);?>
            <?php }?>
    		<?php foreach ($chatroom->result() as $key) {?>
            		<?php $waktu_awal = $waktu_awal - strtotime($key->waktu_mulai);?>
            <?php }?>

            
        <div class="container" id="pesan">
            <?php 
            foreach ($msg->result() as $key) {?>
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
        <div id="chat-input">
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
        </div>
    </section>
    

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });
    </script>
     <script type="text/javascript">
    function kirim_pesan(){
        var pesan = $('#msg').val();
        $('#msg').val("");
        console.log(pesan);
        $.ajax({
            url: "<?php echo base_url(); ?>refre/kirim_pesan_stylist",
            type: "POST",
            data: { 'user':'100', 'tipe':'fashion', 'msg':pesan },
            success: function (response) {
            },
          });
    }

    var myInterval = setInterval(function () {
            $.ajax({
                url: "<?php echo base_url(); ?>refre/get_pesan_fashion",
                type: "POST",
                data: { 'user':'100' },
                success: function (response) {
                  $('#pesan').html(response);
                },
              });
        }, 2000);
    </script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.missofis-countdown.js"></script>
    <script type="text/javascript">
    $( function() {
        $( '#timer-countinbetween' ).countdown( {
            from: <?php echo $waktu_awal?>,
            to:86400
        } );
    });
    </script>
</body>
</html>
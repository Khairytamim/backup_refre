<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php
      $this->load->view('refre/parts/navbar-chat-user');
    ?>

    <?php $ada_chat = 0; ?>
    <section style="margin-top: 80px">
        <div class="container" id="pesan">
                <div id="loading" class="bubble-container">
                    <div class="bubble-left">

                        <div class="preloader-wrapper small active">
                          <div class="spinner-layer spinner-blue">
                            <div class="circle-clipper left">
                              <div class="circle"></div>
                            </div><div class="gap-patch">
                              <div class="circle"></div>
                            </div><div class="circle-clipper right">
                              <div class="circle"></div>
                            </div>
                          </div>

                          <div class="spinner-layer spinner-red">
                            <div class="circle-clipper left">
                              <div class="circle"></div>
                            </div><div class="gap-patch">
                              <div class="circle"></div>
                            </div><div class="circle-clipper right">
                              <div class="circle"></div>
                            </div>
                          </div>

                          <div class="spinner-layer spinner-yellow">
                            <div class="circle-clipper left">
                              <div class="circle"></div>
                            </div><div class="gap-patch">
                              <div class="circle"></div>
                            </div><div class="circle-clipper right">
                              <div class="circle"></div>
                            </div>
                          </div>

                          <div class="spinner-layer spinner-green">
                            <div class="circle-clipper left">
                              <div class="circle"></div>
                            </div><div class="gap-patch">
                              <div class="circle"></div>
                            </div><div class="circle-clipper right">
                              <div class="circle"></div>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            
                <?php foreach ($msg->result() as $key) {?>
                
            

                <?php if($key->tipe_user=='fashion'){ $ada_chat = 1;?>
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
        <div id="given_date" style="display:none"></div>
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
                        <img onClick="kirim_pesan();" src="../assets/refre/img/ui/sendb.png" style="width:100%; margin-top:1.5em">
                    </div>
                </div>
            </div>
        </div>
    </section>

      <div id="modal1" class="modal">
        <div class="modal-content">
          <h4>Notifikasi</h4>
          <p>Mohon maaf belum ada stylish yang konfirmasi, silahkan coba lagi!</p>
        </div>
        <div class="modal-footer">
          <a href="http://refre.co/refre/consult" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
      </div>
    

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.countdownTimer.js"></script>
    <?php $max=100 ?>
     <script>
            var waktu_tunggu = 0;
            var openmodal = 0;
            <?php foreach ($chatroom->result() as $m) {?>
        $(function(){
            $('#given_date').countdowntimer({
                startDate : "<?php echo date('Y/m/d H:i:s'); ?>",
                //startDate : "2016/01/01 11:30:00",
                dateAndTime : "<?php echo str_replace('-','/',$m->waktu_akhir);?>",
                size : "lg",
                timeUp : timeisUp
            });
            <?php }?>
            function timeisUp() {
            console.log("waktu habis" + " <?php echo date('Y-m-d H:i:s'); ?>");
                waktu_tunggu = 1;                
            }
        });
        var myInterval = setInterval(function () {
            $.ajax({
                url: "<?php echo base_url(); ?>refre/check_chat",
                type: "POST",
                data: { 'user':'100' },
                success: function (response) {                    
                    console.log(response);
                    if(response=='0'){
                        $( '#timer-countinbetween' ).hide();
                        $( '#loading' ).show(); 
                        if(waktu_tunggu==1 && openmodal == 0){
                            $('#modal1').openModal();
                            openmodal = 1;
                        }
                    }
                    else
                     $( '#loading' ).hide();   
                    $( '#timer-countinbetween' ).show();
                },
              });

            $.ajax({
                url: "<?php echo base_url(); ?>refre/get_pesan",
                type: "POST",
                data: { 'user':'100' },
                success: function (response) {                    
                    console.log(response);
                    if(response!='')
                    $('#pesan').html(response);
                },
              });
        }, 2000);

    </script>
    <script type="text/javascript">
    function kirim_pesan(){
        var pesan = $('#msg').val();
        $('#msg').val("");
        console.log(pesan);
        $.ajax({
            url: "<?php echo base_url(); ?>refre/kirim_pesan_user",
            type: "POST",
            data: { 'user':'100', 'tipe':'user', 'msg':pesan },
            success: function (response) {
            },
          });
    }
    </script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
            $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        });
    </script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
        });
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.missofis-countdown.js"></script>
       <?php 
            $waktu_awal = 0;
            foreach ($now->result() as $k) {?>
                    <?php $waktu_awal = $waktu_awal + strtotime($k->sekarang);?>
            <?php }?>
            <?php foreach ($chatroom->result() as $key) {?>
                    <?php $waktu_awal = $waktu_awal - strtotime($key->waktu_mulai);?>
            <?php }?>
    <script type="text/javascript">
    $( function() {
        if(1==<?php if($ada_chat==0) echo "1"; else echo "2";?>)
                $( '#timer-countinbetween' ).hide();
            else 
                $( '#timer-countinbetween' ).show();
        $( '#timer-countinbetween' ).countdown( {

            from: <?php echo $waktu_awal?>,
            to:86400
        } );
    });
    </script>
    
</body>
</html>
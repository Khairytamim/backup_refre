<div class="navbar-fixed">
<!--
    <nav style="background-color:white; color:black; box-shadow: none">
        <div class="nav-wrapper">
            <a href="../user/profile.php" class="brand-logo center" style="color:black; font-family:AvantGarde">R E F R E</a>
            <div id="burger">=</div>
        </div>
    </nav>
-->
    <nav style="background-color:white; color:black; box-shadow: none; height:90px; border-bottom: solid lightgrey 1px">
        <a href="<?php echo base_url();?>refre/refre_profile" class="brand-logo center"><img src="../assets/img/logo.png" style="height:20px"></a>
        <div id="burger">=</div>
        <div class="row">
            <div class="col s12" style="margin-bottom: 2em; padding:0; text-align:center">
                <img src="<?php echo base_url();?>assets/img/refre/pp/<?php echo $this->session->userdata('id_user');?>.jpg" class="circle" style="width:5em; box-shadow:0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); margin-top: 3.5em">
                <img src="<?php echo base_url();?>assets/refre/img/pp.png" class="circle" style="width:5em; margin-left:-1.5em; box-shadow:0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);">
            </div>
        </div>
        <div id="end"><a href="#modal-end" class="modal-trigger"><img src="<?php echo base_url();?>assets/refre/img/ui/cross-black.png" style="height:100%"></a></div>
        <div id="time"><span id="timer-countinbetween"></span></div>
    </nav>
</div>
<div id="modal-end" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <h4>End Chat</h4>
            <p>Are you sure to end this chat?</p>
        </div>
        <div class="modal-footer">
            <a href="<?php echo base_url();?>refre/end_chat_user" class="modal-action modal-close waves-effect waves-light btn">YES</a>
        </div>
    </div>
</div>
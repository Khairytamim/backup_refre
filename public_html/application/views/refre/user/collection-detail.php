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
    
    <section style="height:calc(95vh - 60px); overflow-y:scroll">
        <div class="row">
            <?php foreach ($myuploads->result() as $row){ $id=$row->id_foto;?>
            <div class="col m8 s12" style="padding: 0">
                <img src="../../assets/img/refre/<?php echo $row->foto;?>" style="width:100%">
            </div>
            <?php } ?>
            <div class="col m4 s12" style="padding: 1em 2em">
                <h5><?php echo $row->title;?></h5>
                <b><img src="../../assets/refre/img/ui/heartb.png" style="height:1em"> <?php echo $total ?></b>
                <?php foreach ($comment->result() as $row){?>
                <ul class="collection" style="margin-top:1em; padding:0">
                    <li class="collection-item avatar">
                        <img src="../../assets/refre/img/pp.png" alt="" class="circle">
                        <span class="title"><b>Rully Soelaiman</b></span>
                        <p>
                            <?php echo $row->comment;?>
                        </p>
                    </li>
                </ul>
                <?php }?>
            </div>
        </div>
    </section>
    <div class="row" style="height:60px; position:fixed; bottom:0; width:100%; background-color:black; padding-bottom:0.5em; padding-top:1em; margin:0; text-align:center">
        <div class="container">
            <div class="col s3">
                <?php if(!$like){ ?>
                    <a href="<?php echo base_url();?>refre/like/<?php echo $id;?>"><img src="../../assets/refre/img/ui/heart.png" style="height:30px"></a>
                <?php }else {?>
                <a href="<?php echo base_url();?>refre/unlike/<?php echo $id;?>"><img src="../../assets/refre/img/ui/heartb.png" style="height:30px; background-color: white;"></a>
                <?php }?>
            </div>
            <?php if($this->session->userdata('id_stylist') != null){ ?>
            <div class="col s3">
                <a class="modal-trigger" href="#comment"><img src="../../assets/refre/img/ui/comment.png" style="height:30px"></a>
            </div>
            <?php }?>
            <!--div class="col s3">
                <a href="#!"><img src="../../assets/refre/img/ui/share.png" style="height:30px"></a>
            </div-->
            <div class="col s3">
                <a href="<?php echo base_url();?>refre/hapus_foto/<?php echo $id;?>"><img src="../../assets/refre/img/ui/garbage.png" style="height:30px"></a>
            </div>
            <?php foreach ($myuploads->result() as $row){ $id=$row->id_user;?>
            <?php if($this->session->userdata('id_user') != '$id'){ ?>
            <!--div class="col s3">
                <a class="modal-trigger" href="#delete"><img src="../../assets/refre/img/ui/garbage.png" style="height:30px"></a>
            </div-->
            <?php }}?>
            
        </div>
    </div>
    <div id="comment" class="modal bottom-sheet">
        <div class="modal-content">
          <div class="row">
              <div class="container">
                    <form action="/refre/chatting" method="post">
                        <div class="input-field col s12">
                            <h3 style="font-family:AvantGarde; font-size:20px">C O M M E N T</h3>
                            <textarea name="comment" placeholder="put you comment here" id="username" type="comment" class="materialize-textarea" style="background-color:white; color:black; padding-left:1em; padding-right:1em; width:90%"></textarea>
                        </div>
                        <div class="input-field col s12 m6 offset-m3">
                            <button type="submit" class="btn" style="width:100%">ADD COMMENT</a>
                        </div>
                    </form>
               </div>
           </div>
        </div>
    </div>
    <div id="delete" class="modal bottom-sheet">
        <div class="modal-dialog">
            <div class="modal-content">
                <h4>Delete Photo</h4>
                <p>Are you sure to delete this photo?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url();?>refre/collection_detail/<?php echo $id;?>" class="modal-action modal-close waves-effect waves-light btn">NO</a>
                <a href="<?php echo base_url();?>refre/hapus_foto/<?php echo $id;?>" class="modal-action modal-close waves-effect waves-light btn">YES</a>
            </div>
        </div>
    </div>
    <script src="http://refre.co/assets/js/jquery.min.js"></script>
    <script src="http://refre.co/assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();
        });
    </script>

</body>
</html>
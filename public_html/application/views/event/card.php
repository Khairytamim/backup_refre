<?php foreach ($h->result() as $row){?>
<style type="text/css" media="screen">
.images-example-2 div {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  display: inline-block;
  padding-top: 100%; 
  width: 100%;
  height: <?php echo $row->height?>px;
}
</style>
<?php $id_ = substr($row->id, 3, 11);?>
<script type="text/javascript">
var grid = document.querySelector('#timeline');
var item = document.createElement('item');
salvattore.appendElements(grid, [item]);
item.outerHTML = '<div class="item"><div class="card lala" ><a onclick="contentload.load('+"'<?php echo $row->id;?>'"+');" href="#content<?php echo $id_;?>" class="modal-trigger"><div class="card-image "><div class="images-example-2"><div class="red" data-src="<?php echo base_url();?>assets/assets/<?php echo $row->id;?>.jpg" alt="" style="height:<?php echo $row->height?>px"></div></div></div></a><div class="card-content"><span class="card-title activator grey-text text-darken-4"><?php echo $row->title;?></span><p><a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/love.svg" class="tiny"/><?php echo $row->like;?></a><a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/share.svg" class="tiny"/><?php echo $row->share;?></a><a href="#" class="grey-text"><img src="<?php echo base_url();?>assets/pictures/star.svg" class="tiny right"/></a></p></div><div class="divider"></div><div class="card-content"><div class=row><div class="col s3"><img class="profil circle red left" src="<?php echo base_url();?>assets/assets/yuna.jpg" style="max-width:100%" alt=""></div><div class="col s9"><p class="ava_title grey-text">Bromo Comunity</p><p class="ava_title grey-text"><i class="material-icons tiny" >add</i>follow</p></div></div></div><div id="content<?php echo $id_;?>" class="modal"></div></div>';
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/image_loader.js"></script>
<script>
$(function() {
  $('.images-example-2').loadImages({
    imgLoadedClb: function(){
              //$console.append( $('<div></div>').text("[image loaded] " + $(this).data('src')) );
            },
            allLoadedClb: function(){
              //$console.append( $('<div></div>').text("[all images loaded] " + $(this).attr('class')) );
            },
            imgErrorClb:  function(){
              //$console.append( $('<div class="error"></div>').text("[image error] " + $(this).data('src')) );
            },
            noImgClb:     function(){
              //$console.append( $('<div class="error"></div>').text("[no valid images found] " + $(this).attr('class')) );
            }
          });
});
</script> 
<?php } ?>
<script type="text/javascript">
$(document).ready(function(){
  $('.modal-trigger').leanModal();
});</script>
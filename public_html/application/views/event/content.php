		<?php  foreach ($h->result() as $row){?>
		<?php $id_ = substr($row->id, 3, 11);?>
		<div class="row">
			<div class="col s12">
				<div class="action-bar">
					<a class="modal-action modal-close" onclick="$('body').css('overflow', 'auto');$('.lean-overlay').fadeOut();$('#content<?php echo $id_;?>').fadeOut();$('#content<?php echo $id_;?>').empty();"><img class="right margin" src="<?php echo base_url();?>assets/pictures/close.svg" width="20px"/></a>
				</div>
			</div>
		</div>

		<div class="divider_3"></div>

		<div class="row" style="height:calc(100vh - 50px);overflow:auto">
			<div class="col s12 m7 l7" >
				<div class="images">
					<img style="width:100%" data-src="<?php echo base_url();?>assets/assets/<?php echo $row->id;?>.jpg" alt=""/>
				</div>
			</div>	
			<div class="col s12 m5 l5">
				<div class="padding">
					<h5 align="center"><?php echo $row->title;?></h5>
					<p class="grey-text"><?php echo $row->content;?></p>
					<p class="grey-text"><?php echo $row->place;?></p>
				</div> 
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/image_loader.js"></script>
			<script>
			$(function() {

				$('.images').loadImages({
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
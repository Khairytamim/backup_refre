<script>
    function showDetail() {
        //document.getElementById('anu').style.bottom = '0';
        var x = document.getElementsByClassName("model-caption");
        var i;
        for (i = 0; i < 10; i++) {
            x[i].style.bottom = "0";
        }

    }
    function hideDetail(){
        var x = document.getElementsByClassName("model-caption");
        var i;
        for (i = 0; i < 10; i++) {
            x[i].style.bottom = "-64px";
        }
    }
    document.getElementById('navb').style.backgroundColor = 'transparent';
    $(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 380) {
                    $("#navb").css('background-color', '#404040');
                } else {
                    $("#navb").css('background-color', 'transparent');
                }
            });
        });
</script>
<style>
 #navb {
        background-color: transparent;
    }
.cat-title {
    padding-top: 0.5em;
    color: #e45d25;
    font-weight:700;
    font-size: 1.2em;
    border-top: solid 3px #e45d25;
}
    
.slider-2, .slider-2:focus {
    position: absolute;
    display: block;
    box-sizing: border-box;
    border: none;
    outline: none;
    top: 37%;
    bottom: 0;
    width: 4%;
    height: 10%;
    background-color: transparent;
    color: #fff;
    margin: 0;
    padding: 0;
    font-size:2em;
    text-align:center;
    z-index: 100;

}

.slider-container-2 {
    width: 100%;
    height:auto;
    position: relative;
    vertical-align: center;
}

.model-container {
    max-height: 500px;
    position: relative;
}
    
.model-caption {
    max-height: 100px;
    color: white;
    width: 100%;
    position: absolute;
    //background-color: rgba(0,0,0,0.5);
    background-color: #e45d25;
    padding: 1em;
    bottom: -64px;
    transition: 0.2s;
}
    
/*
.model-caption:hover {
    bottom: 0;
    transition: 0.2s;
 }
*/

</style>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>




<div class="row" style="margin-top:-3.6em">
    <div class="col s12" style="padding: 0">
        <img src="<?php echo base_url();?>assets/img/personality/pers-large.jpg" style="width: 100%">
    </div>
</div>
<div class="container" style="margin-top: 3em">
    
    <div class="row">
        <div class="col s12 m6" style="margin-top: 1.5em">
            <div class="col s12" style="padding-bottom: 2em; padding-top: 1.5em">
                <div style="text-align: center">
                    <span class="cat-title">our rebels</span>
                </div>
            </div>
            <div class="col s12">
                <div class="slider-container-2" onmouseover="showDetail()" onmouseout="hideDetail()">
                    <div class="row owl-carousel2" id="our-models" style="margin-left:auto;margin-right:auto" >
                        <div class="owl-item" style="padding:0">
                            <div class="model-container">
                                <a href="<?php echo base_url();?>home/personalitydetail">
                                    <img src="<?php echo base_url();?>assets/img/personality/models/001.JPG">
                                </a>
                            </div>
                            <div class="model-caption">
                                <b>Lorem Ipsum</b>
                                <div> aaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum nec lacus id scelerisque. Pellentesque ultricies massa erat, eu porta ipsum egestas sed. Pellentesque habitant morbi</div>
                            </div>
                        </div>
                        <div class="owl-item" style="padding:0">
                            <div class="model-container">
                                <a href="<?php echo base_url();?>home/personalitydetail">
                                    <img src="<?php echo base_url();?>assets/img/personality/models/001.JPG">
                                </a>
                            </div>
                            <div class="model-caption">
                                <b>Lorem Ipsum</b><br>
                                <div> aaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum nec lacus id scelerisque. Pellentesque ultricies massa erat, eu porta ipsum egestas sed. Pellentesque habitant morbi</div>
                            </div>
                        </div>
                        <div class="owl-item" style="padding:0">
                            <div class="model-container">
                                <a href="<?php echo base_url();?>home/personalitydetail">
                                    <img src="<?php echo base_url();?>assets/img/personality/models/001.JPG">
                                </a>
                            </div>
                            <div class="model-caption">
                                <b>Lorem Ipsum</b><br>
                                <div> aaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dictum nec lacus id scelerisque. Pellentesque ultricies massa erat, eu porta ipsum egestas sed. Pellentesque habitant morbi</div>
                            </div>
                        </div>
                    </div>

                    <button id="mo-next" class="slider-2" style="left: 5%"><img src="<?php echo base_url();?>assets/img/prev-orange.png" style="width:100%"></button>
                    <button id="mo-prev" class="slider-2" style="right: 5%"><img src="<?php echo base_url();?>assets/img/next-orange.png" style="width:100%"></button>

                </div>
            </div>
        </div>
        
        <div class="col s12 m6" style="margin-top: 1.5em">
            <div class="col s12" style="padding-bottom: 2em; padding-top: 1.5em">
                <div style="text-align: center">
                    <span class="cat-title">other personalities</span>
                </div>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers1.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers2.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers3.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers1.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers2.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers3.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers3.jpg" style="width: 100%"></a>
            </div>
            <div class="col s3 m4" style="margin-bottom: 0.6em">
                <a href="personality.php" class="fadeeffect"><img src="<?php echo base_url();?>assets/img/personality/pers3.jpg" style="width: 100%"></a>
            </div>
        </div>
        
    </div>
    
    
          <div class="col s12">
              <div style="margin-top: 5em; margin-bottom: 3em; text-align: center">
                   <span class="cat-title">related products</span>
              </div>
              <div class="slider-container-2">
                      <div class="row owl-carousel" id="related-item" style="margin-left:auto;margin-right:auto">
                          
                    <?php foreach ($persona->result() as $row){ ?>
                    <?php if($row->status_tampil==1){?>
                          <div class="owl-item" style="padding:0">
                              <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
                                  <div class="card_1">
                                      <div class="card-image"> 
                                          <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg">   	
                                      </div> 
                                      <div class="card-content">
                                          <p class="truncate"><b><?php echo strtoupper($row->nama_produk);?></b></p>
                                          <p class="truncate"><?php echo strtoupper($row->brand);?></p>
                                          <?php $yang_asli =$row->harga;?>
                                          <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
                                          <?php $harga_asli = number_format ($yang_asli, 0, '','.');?>
                                          <p style="text-decoration:line-through"><?php if($yang_asli!=$yang_tampil){?>
                                              Rp <?php echo $harga_asli;?> 
                                              <?php } else echo "<br>";?>
                                          </p> 
                                          <p>
                                              <b>
                                              <?php if($row->diskon!=0){?>
                                              <span class="chip right" style="background-color: rgba(228,93,37,1); color: white;"><?php echo $row->diskon?>% OFF</span>
                                              <?php } ?>
                                                  
                                              <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
                                              Rp <?php echo $format_indonesia?>
                                              </b>
                                          </p> 
                                          
                                      </div>
                                  </div>  
                              </a>
                          </div>
                          <?php }} ?>
                          
                          
                          
                      </div>
                      <button id="ri-next" class="slider-2" style="left:-5%"><img src="<?php echo base_url();?>assets/img/prev-orange.png" style="width:100%"></button>
                      <button id="ri-prev" class="slider-2" style="right:-5%"><img src="<?php echo base_url();?>assets/img/next-orange.png" style="width:100%"></button>
                  </div>
          </div> 
    
</div>


<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    lazyLoad:true,
    slideBy:1,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})
var ri = $('#related-item');
ri.owlCarousel();
$('#ri-next').click(function() {
    ri.trigger('prev.owl.carousel');
})
$('#ri-prev').click(function() {
    ri.trigger('next.owl.carousel');
})

$('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    lazyLoad:true,
    slideBy:1,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

var mo = $('#our-models');
mo.owlCarousel();
$('#mo-next').click(function() {
    mo.trigger('prev.owl.carousel');
})
$('#mo-prev').click(function() {
    mo.trigger('next.owl.carousel');
})
</script>
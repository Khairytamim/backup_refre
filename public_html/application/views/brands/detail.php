<style>
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

.cat-title {
  padding-top: 0.5em;
  color: #e45d25;
  font-weight:700;
  font-size: 1.2em;
  border-top: solid 3px #e45d25;
}
</style>


<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="row" style="margin-top:3em">

        <?php  
        foreach ($produk->result() as $row)  
        {  
          ?> 

          <div class="col s12 l4" style="text-align: right; padding: 0 2em 2em 2em" id="gallery_01f"> 
            <div class="row">
              <div class="col s12">
                <img id="zoom_01" src='<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg' data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/1/<?php echo $row->id_produk;?>.jpg"/ style="width:100%">  
              </div>
              <div class="col s12">
                <a href="#" class="elevatezoom-gallery active" data-image="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/1/<?php echo $row->id_produk;?>.jpg"> 
                  <img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/1/<?php echo $row->id_produk;?>.jpg" /> 
                </a> 
                <a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/2/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/2/<?php echo $row->id_produk;?>.jpg"> 
                  <img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/2/<?php echo $row->id_produk;?>.jpg" /> 
                </a> 
                <a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/3/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/3/<?php echo $row->id_produk;?>.jpg"> 
                  <img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/3/<?php echo $row->id_produk;?>.jpg" /> 
                </a> 
                <a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/4/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/4/<?php echo $row->id_produk;?>.jpg"> 
                  <img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/4/<?php echo $row->id_produk;?>.jpg" /> 
                </a> 
              </div>
            </div>
          </div>
          <div class="col s12 l8" style="padding: 0 1em 1em 1em">

           <div class="bcrumbs" style="margin-bottom: 2em"><b><a href="#">Men</a> / <a href="#">Kategori</a> / <a href="#">Subkategori</a> / <a href="#"><?php echo strtoupper($row->brand);?></a> / <?php echo $row->nama_produk;?></b></div>


           <h5><b><?php echo $row->nama_produk;?></b></h5>
           <h6><b><?php echo strtoupper($row->brand);?></b></h6>

           <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
           <?php $yang_asli =$row->harga;?>
           <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
           <?php $harga_asli = number_format ($yang_asli, 0, '','.');?>
           
           <h4 style="color: #e45d25"><b>Rp <?php echo $format_indonesia;?></b></h4>
           <?php if($row->diskon!=0) {?>
           <p style="text-decoration:line-through">Rp <?php echo $harga_asli;?></p>
           <?php }?>
           <p><?php echo $row->deskripsi_produk;?></p>
           <p>Berat: <?php echo $row->berat;?> gram</p>
          <!--div class="chip">Katun</div>
          <div class="chip">Putih</div>
          <div class="chip">Kerah bulat</div>
          <div class="chip">Lengan pendek</div-->

              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="input-field col s3 m2">
                      <select class="browser-default col l12" name="ukuran" id="ukuran">
                        <?php if($tipe==0){?>
                        <option value="" disabled selected>Size</option>
                        <option value="u1">Satu Ukuran</option>
                        <?php }?>
                        <?php if($tipe==1){?>
                        <option value="" disabled selected>Size</option>
                        <option value="u1">XS</option>
                        <option value="u2">S</option>
                        <option value="u3">M</option>
                        <option value="u4">L</option>
                        <option value="u5">XL</option>
                        <option value="u6">XXL</option>
                        <?php }?>
                        <?php if($tipe==2){?>
                        <option value="" disabled selected>Size</option>
                        <option value="u1">36</option>
                        <option value="u2">37</option>
                        <option value="u3">38</option>
                        <option value="u4">39</option>
                        <option value="u5">40</option>
                        <option value="u6">41</option>
                        <option value="u7">42</option>
                        <option value="u8">43</option>
                        <option value="u9">44</option>
                        <option value="u10">45</option>
                        <option value="u11">46</option>
                        <option value="u12">47</option>
                        <?php }?>
                        <?php if($tipe==3){?>
                        <option value="" disabled selected>Size</option>
                        <option value="u1">27</option>
                        <option value="u2">28</option>
                        <option value="u3">29</option>
                        <option value="u4">30</option>
                        <option value="u5">31</option>
                        <option value="u6">32</option>
                        <option value="u7">33</option>
                        <option value="u8">34</option>
                        <option value="u9">35</option>
                        <option value="u10">36</option>
                        <option value="u11">37</option>
                        <option value="u12">38</option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="col s9 m10">
                     <a id="pesan" class="btn" style="margin-top:20px; margin-bottom:20px;"><img src="<?php echo base_url();?>assets/img/cartwhite.png" style="height: 1em; "> BELI</a>  
                     <a href="#size-chart-modal" class="modal-trigger btn inverted" style="margin-top:20px; margin-bottom:20px;">UKURAN</a>
                   </div>

                   <div class="input-field col s12">
                    <div id="ketersediaan">
                    </div> 
                  </div> </div>
              </div>
            </div>
          </div>

          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
          <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
          <div class="col s12 container">
            <div style="margin-top: 4em; text-align: center">
             <span class="cat-title">related products</span>
           </div>
           <div class="slider-container-2">
            <div class="row owl-carousel" id="related-item" style="margin-left:auto;margin-right:auto">
              <div class="owl-item" style="padding:0">
                <a href="<?php echo base_url();?>brands/detail/77">
                  <div class="card_1">
                    <div class="card-image" style="border: none"> 
                      <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/77.jpg" style="border: none">
                    </div>        	

                    <div class="card-content">
                      <p class="truncate"><b>NAMA PRODUK</b></p>
                      <p class="truncate">NAMA BRAND</p>
                      <p style="text-decoration:line-through">Rp 100.000</p> 
                      <p style="text-align: left; font-weight: bold">
                        <span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span>
                        Rp 90.000</p> 
                      </div>
                    </div>
                  </a>
                </div>
                <div class="owl-item" style="padding:0">
                  <a href="<?php echo base_url();?>brands/detail/77">
                    <div class="card_1">
                      <div class="card-image" style="border: none"> 
                        <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/77.jpg" style="border: none">
                      </div>        	

                      <div class="card-content">
                        <p class="truncate"><b>NAMA PRODUK</b></p>
                        <p class="truncate">NAMA BRAND</p>
                        <p style="text-decoration:line-through">Rp 100.000</p> 
                        <p style="font-weight: bold;">
                          <span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span>
                          Rp 90.000</p> 
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="owl-item" style="padding:0">
                    <a href="<?php echo base_url();?>brands/detail/77">
                      <div class="card_1">
                        <div class="card-image" style="border: none"> 
                          <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/77.jpg" style="border: none">
                        </div>        	

                        <div class="card-content">
                          <p class="truncate"><b>NAMA PRODUK</b></p>
                          <p class="truncate">NAMA BRAND</p>
                          <p style="text-decoration:line-through">Rp 100.000</p> 
                          <p style="font-weight: bold;">
                            <span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span>
                            Rp 90.000</p> 
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="owl-item" style="padding:0">
                      <a href="<?php echo base_url();?>brands/detail/77">
                        <div class="card_1">
                          <div class="card-image" style="border: none"> 
                            <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/77.jpg" style="border: none">
                          </div>        	

                          <div class="card-content">
                            <p class="truncate"><b>NAMA PRODUK</b></p>
                            <p class="truncate">NAMA BRAND</p>
                            <p style="text-decoration:line-through">Rp 100.000</p> 
                            <p style="font-weight: bold;">
                              <span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span>
                              Rp 90.000</p> 
                            </div>
                          </div>
                        </a>
                      </div>




                    </div>
                    <button id="ri-next" class="slider-2" style="left:-5%"><img src="<?php echo base_url();?>assets/img/prev-orange.png" style="width:100%"></button>
                    <button id="ri-prev" class="slider-2" style="right:-5%"><img src="<?php echo base_url();?>assets/img/next-orange.png" style="width:100%"></button>
                  </div>
                </div> 

              </div>
            </div>



            <!-- modal sizing chart -->
            <div id="size-chart-modal" class="modal">
              <div class="modal-content">
                <div class="input-field col s12">
                  <div class="row">		 

                   <?php if($tipe==0){?>


                   <div class="input-field col s12" >
                    <h5>Detail Ukuran</h5>
                    <div class="row">
                     <div class="input-field col s12">
                       <p><?php echo $item[1];?></p>
                     </div>
                   </div>
                 </div>

                 <?php }else if($tipe==1){?>

                 <div class="input-field col s12" >
                  <h5>Detail Ukuran</h5>

                  <table class="centered" style="margin-top:40px">
                   <thead>
                     <tr>
                       <th></th>
                       <th>XS</th>
                       <th>S</th>
                       <th>M</th>
                       <th>L</th>
                       <th>XL</th>
                       <th>XXL</th>
                     </tr>
                   </thead>

                   <tbody>
                     <tr>
                       <td style="text-align:left; "><b>CHEST</b></td>
                       <?php for($i=1; $i<=6; $i++){?>
                       <td><?php echo $item1[$i];?></td>
                       <?php }?>
                     </tr>
                     <tr>
                       <td style="text-align:left; "><b>LENGTH</b></td>
                       <?php for($i=1; $i<=6; $i++){?>
                       <td><?php echo $item2[$i];?></td>
                       <?php }?>
                     </tr>
                     <tr>
                       <td style="text-align:left; "><b>SHOULDER WIDTH</b></td>
                       <?php for($i=1; $i<=6; $i++){?>
                       <td><?php echo $item3[$i];?></td>
                       <?php }?>
                     </tr>
                   </tbody>
                 </table>
               </div>

               <?php }else if($tipe==2){ ?>


               <div class="input-field col s12">
                <h5>Detail Ukuran</h5>
                <p>Inputkan ukuran dalam ukuran (cm)</p>

                <table class="centered" style="margin-top:40px">
                 <thead>
                   <tr>
                     <th></th>
                     <th>36</th>
                     <th>37</th>
                     <th>38</th>
                     <th>39</th>
                     <th>40</th>
                     <th>41</th>
                     <th>42</th>
                     <th>43</th>
                     <th>44</th>
                     <th>45</th>
                     <th>46</th>
                     <th>47</th>
                   </tr>
                 </thead>

                 <tbody>
                   <tr>
                     <td style="text-align:left; padding-right:30px"><b>LENGTH</b></td>
                     <?php for($i=36; $i<=47; $i++){?>
                     <td><?php echo $item1[$i];?></td>
                     <?php }?>
                   </tr>

                 </tbody>
               </table>

             </div>
             <?php } else if($tipe==3){ ?>
             <div class="input-field col s12">
              <h5>Detail Ukuran</h5>
              <p>Inputkan ukuran dalam ukuran (cm)</p>

              <table class="centered" style="margin-top:40px">
               <thead>
                 <tr>
                   <th></th>
                   <th>27</th>
                   <th>28</th>
                   <th>29</th>
                   <th>30</th>
                   <th>31</th>
                   <th>32</th>
                   <th>33</th>
                   <th>34</th>
                   <th>35</th>
                   <th>36</th>
                   <th>37</th>
                   <th>38</th>
                 </tr>
               </thead>

               <tbody>
                 <tr>
                   <td style="text-align:left; padding-right:30px"><b>INSEAM</b></td>
                   <?php for($i=27; $i<=38; $i++){?>
                   <td><?php echo $item1[$i];?></td>
                   <?php }?>
                 </tr>
                 <tr>
                   <td style="text-align:left; padding-right:30px"><b>WAIST</b></td>
                   <?php for($i=27; $i<=38; $i++){?>
                   <td><?php echo $item2[$i];?></td>
                   <?php }?>
                 </tr>
                 <tr>
                   <td style="text-align:left; padding-right:30px"><b>HIP</b></td>
                   <?php for($i=27; $i<=38; $i++){?>
                   <td><?php echo $item3[$i];?></td>
                   <?php }?>
                 </tr>
                 <tr>
                   <td style="text-align:left; padding-right:30px"><b>THIGH</b></td>
                   <?php for($i=27; $i<=38; $i++){?>
                   <td><?php echo $item4[$i];?></td>
                   <?php }?>
                 </tr>
               </tbody>
             </table>
           </div>
           <?php }?>
         </div>
       </div>
     </div>
   </div>

   <!-- Modal add to cart-->
   <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
     <div class="row">
      <div class="col s12">
       <h5 style="color:#e45d25;" class="center"><b>1 Item Telah ditambahkan ke Troli Anda</b></h5>
     </div>
   </div>
   <div class="row" style="padding:0 2em; margin-bottom: 0">
    <div class="col s12 m4">

     <img style="width:90%" src='<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg' onerror="this.src='<?php echo base_url();?>assets/gambar_pohon/pohon_1.png'"> 

   </div>
   <div class="col s12 m8">
    <h5><?php echo $row->nama_produk;?></h5>
    <h6><b><?php echo strtoupper($row->brand);?></b></h6>
    <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
    <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
    <h5> Rp <?php echo $format_indonesia;?></p></h5>
    <?php if($row->diskon!=0) {?>
    <p style="text-decoration:line-through">Rp <?php echo $row->harga;?></p>
    <?php }?>
    <p><?php echo $row->deskripsi_produk;?></p>
  </div>     
</div>
</div>
<div class="modal-footer">
  <a href="#!" class=" modal-action modal-close btn-flat">Lanjutkan Belanja</a>
  <a href="<?php echo base_url();?>cart" class=" modal-action modal-close btn">Konfirmasi Pemesanan</a>
</div>
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
</script>
<script>
var isMobile = false;
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
  || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
if(isMobile == false){
  $('#zoom_01').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750,
    scrollZoom : true,
    galleryActiveClass: "active",
    gallery:'gallery_01f'
  }); 

  $("#zoom_01").bind("click", function(e) { var ez = $('#zoom_01').data('elevateZoom');
   $.fancybox(ez.getGalleryList()); return false; });

}
$("img").error(function(){
  $(this).hide();
});
</script>

<script type="text/javascript">
$('#pesan').click(function() {
  var cabang = $("input[name=kota]:checked").val();
  var ukuran = $("select[name=ukuran]").val();
  console.log(cabang);
  if(typeof(cabang) == 'undefined' || typeof(ukuran) == 'undefined') Materialize.toast('Ukuran produk dan toko harus terisi!', 4000);
    else{

  $.ajax({
    url: "<?php echo base_url();?>brands/add_cart",
    type: "POST",
    data: {'id_produk':<?php echo $row->id_produk;?>,id_toko:cabang ,ukuran:ukuran,berat:'<?php echo $row->berat;?>'  },
    success: function (response) {
      $('#modal1').openModal();
    },
  });}
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#ukuran').on("change",function () {
    var ukuran= $(this).find('option:selected').val();
    $.ajax({
      url: "<?php echo base_url();?>brands/cek_ketersediaan_produk/<?php echo $row->id_produk;?>",
      type: "POST",
      data: "ukuran="+ukuran,
      success: function (response) {
        $('#ketersediaan').html(response);
      },
    });
  }); 
});
</script>
<?php }?>
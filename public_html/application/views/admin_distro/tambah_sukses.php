           <div class="col s12 l9 panel-divider">
               <div class="card-panel lighten-2 title-panel">
               	  <h5><b>+</b> Tambah Produk</h5>
               </div>
               <div class="card-panel lighten-2">
                <div class="row">
               		<div class="col s12">
                    <h5>Gambar Produk</h5>
                    <p>Masukkan gambar produk minimal satu foto. Gunakan 6 foto terbaik untuk gambar produk Anda. Kami hanya menerima gambar dengan format (.jpg) dengan ukuran gambar maksimal 2mb. Disarankan gambar yang akan <i>diupload</i> adalah gambar dengan resolusi tinggi.</p>
                    </div>
                </div>
                    <div class="row">
                        <div class="col s2">
                             <form  id="produk1" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/1" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s2">
                             <form  id="produk2" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/2" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s2">
                             <form  id="produk3" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/3" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s2">
                             <form  id="produk4" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/4" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s2">
                             <form  id="produk5" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/5" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s2">
                             <form  id="produk6" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/6" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        
                    </div>
               </div>
               <div class="card-panel lighten-2">
                    <h5>Detail Produk</h5>
                    <?php if(null !=validation_errors('<p class="error">')){?>
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; padding:10px">
					<?php echo validation_errors('<p class="error">'); ?>
				</div>
			<?php }?>
                    <form action="<?php echo base_url();?>AdminDistro/tambah_produk_submit" method="post">
                         <div class="row">
                              <div class="input-field col s6">
                                   <input name="nama_produk" id="nama_produk" type="text" class="validate" value="<?php echo set_value('nama_produk'); ?>">
                                   <label for="nama_produk">Nama Produk</label>
                              </div>
                              <div class="input-field col s6">
                                   <input name="harga" id="harga" type="text" class="validate" value="<?php echo set_value('harga'); ?>">
                                   <label for="harga">Harga</label>
                              </div>
                              
                         </div>
                         <div class="row">
                         <div class="input-field col s6">                         
				    <select name="kategori">
				      <optgroup label="FASHION">
				      <?php foreach ($kategori->result() as $row){?> 
				        <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?></option>
				        <?php }?>
				      </optgroup>
				    </select>
				    <label>Pilih Kategori</label>
				    </div>
                               <div class="input-field col s6">
                                   <input name="berat" id="berat" type="text" class="validate" value="<?php echo set_value('berat'); ?>">
                                   <label for="berat">Berat</label>
                              </div>
                         </div>
                         <div class="row">
                         	<div class="input-field col s12">
                                   <textarea name="deskripsi_produk" id="deskripsi_produk" class="materialize-textarea"><?php echo set_value('deskripsi_produk'); ?></textarea>
                                   <label for="deskripsi_produk">Deskripsi Produk</label>
                              </div>
                         </div>
                         <div class="row">
                         <div class="input-field col s6">
                         	 <select class="icons" name="penyimpanan">
				      <option value="" disabled selected>Tambahkan ke</option>
				      <option value="0" data-icon="images/sample-1.jpg" class="circle">Etalase</option>
				      <option value="1" data-icon="images/office.jpg" class="circle">Gudang</option>
				    </select>
				    </div>
			         <div class="input-field col s6">
                                   <input name="ukurancm" id="ukurancm" type="text" class="validate" value="<?php echo set_value('ukurancm'); ?>">
                                   <label for="ukurancm">Detail Ukuran (Panjang, lebar, lingkar, dll)</label>
                              </div>
                              </div>
                                   
                         <div class="row">
							 
							 
							 <div class="input-field col s12">
							 <p>Jumlah per Ukuran</p>
							 </div>
								  <div class="input-field col s2">
									   <input placeholder="0" name="s" id="s" type="text" class="validate" value="<?php echo set_value('s'); ?>">
									   <label for="s">S</label>
								  </div>
								  <div class="input-field col s2">
									   <input placeholder="0" name="m" id="m" type="text" class="validate" value="<?php echo set_value('m'); ?>">
									   <label for="m">M</label>
								  </div>
								  <div class="input-field col s2">
									   <input placeholder="0" name="l" id="l" type="text" class="validate" value="<?php echo set_value('l'); ?>">
									   <label for="l">L</label>
								  </div>
								  <div class="input-field col s2">
									   <input placeholder="0" name="xl" id="xl" type="text" class="validate" value="<?php echo set_value('xl'); ?>">
									   <label for="xl">XL</label>
								  </div>
								  <div class="input-field col s2">
									   <input placeholder="0" name="xxl" id="xxl" type="text" class="validate" value="<?php echo set_value('xxl'); ?>">
									   <label for="xxl">XXL</label>
								  </div>
                         </div>
                         <div class="row">
                              <div class="col s12">
                                   <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%; margin-top:20px">Simpan</button>
                              </div>
                         </div>
                    </form>
               </div>
         </div>
     </div>
</div>
<script type="text/javascript">
     Dropzone.autoDiscover = false;
    
    Dropzone.options.myDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 2, // MB
      acceptedFiles: ".jpeg,.jpg,.png,.gif"
    }; 
    $(function() {
      var produk1= new Dropzone("#produk1");
    	produk1.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk1.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})
    
    $(function() {
      var produk2= new Dropzone("#produk2");
    	produk2.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk2.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})
    
     $(function() {
      var produk3= new Dropzone("#produk3");
    	produk3.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk3.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})
    
     $(function() {
      var produk4= new Dropzone("#produk4");
    	produk4.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk4.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})
    
     $(function() {
      var produk5= new Dropzone("#produk5");
    	produk5.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk5.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})
    
     $(function() {
      var produk6= new Dropzone("#produk6");
    	produk6.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
    })
    
    produk6.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);

    });})

</script> 
<script type="text/javascript">
$(document).ready(function(){
 $(".button-collapse").sideNav();
  $('select').material_select();
  });

</script>
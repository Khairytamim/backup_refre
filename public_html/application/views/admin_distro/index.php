                     <div class="col s12 l9">
               <div class="card-panel lighten-2 title-panel">
               	  <h5><i class="material-icons">shopping_basket<sup>add</sup></i><br>Tambah Produk</h5>
               </div>
               <div class="card-panel lighten-2">
                <div class="row">
               		<div class="col s12">
                    <h5>Gambar Produk</h5>
                    <p>Masukkan gambar produk minimal satu foto. Gunakan <b>minimal 3 foto</b> terbaik untuk gambar produk Anda. Kami hanya menerima gambar dengan format (.jpg) dengan ukuran gambar maksimal 5mb. Disarankan gambar yang akan <i>diupload</i> adalah gambar dengan resolusi tinggi.</p>
                    </div>
                </div>
                    <div class="row">

                        <div class="col s4 l2">
                             <form  id="produk1" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/1" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk2" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/2" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk3" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/3" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk4" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/4" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk5" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/5" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                             <form  id="produk6" action="<?php echo base_url();?>AdminDistro/gambar_produk_upload/6" class="dropzone"  >
                             <div class="dz-message" data-dz-message><span><img src="<?php echo base_url();?>assets/dropzone/plus.png" style="max-width:50px"/></span></div>
                             </form>
                        </div>
                        <div class="col s4 l2">
                        	<p>Total File Uploaded: <span id="value">0</span></p>
                        </div>
                    </div>
               </div>
               <div class="card-panel lighten-2 detail_produk">
                    <h5>Detail Produk</h5>
                    <?php if(null !=validation_errors('<p class="error">')){?>
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; padding:10px">
					<?php echo validation_errors('<p class="error">'); ?>
				</div>
			<?php }?>
                    <form action="<?php echo base_url();?>AdminDistro/tambah_produk_submit" method="post">
                         <div class="row">
                              <div class="input-field col s12 l6">
                                   <input name="nama_produk" id="nama_produk" type="text" class="validate" value="<?php echo set_value('nama_produk'); ?>">
                                   <label for="nama_produk">Nama Produk</label>
                              </div>
                              <div class="input-field col s6 l3">
                                   <input name="harga" id="harga" type="number" class="validate" value="<?php echo set_value('harga'); ?>">
                                   <label for="harga">Harga (IDR)</label>
                              </div>
                              <div class="input-field col s6 l3">
                                   <input name="discount" id="discount" type="number" class="validate" value="<?php echo set_value('dicount'); ?>">
                                   <label for="dicount">Discount (%)</label>
                              </div>
                              
                         </div>
                          <div class="row">
                          	<div class="input-field col s12 l6">
                                   <input name="brand" id="brand" type="text" class="validate" value="<?php echo set_value('brand'); ?>" >
                                   <label for="brand">Brand</label>
                              </div>
                              <div class="input-field col s12 l6">
                                   <input name="id_brand" id="id_brand" type="text" class="validate" value="<?php echo set_value('id_brand'); ?>" >
                                   <label for="id_produk">ID Brand</label>
                              </div>
                         </div>
                         <div class="row">
                           <div class="input-field col s12 l3">
                            <select name="gender" required="required">
                                      <option value="" disabled selected>Choose Gender</option>
                                  <option value="1">Men</option>
                                  <option value="2">Women</option>
                                  <option value="3">Unisex</option>
                            </select>
                          </div>
                           <div class="input-field col s12 l5">
                            <select name="personality" required="required">
                                <option value="" disabled selected>Choose Personality</option>
                                  <?php foreach ($personality->result() as $row){?>
                                <option value="<?php echo $row->id_namaper;?>"><?php echo $row->nama_personality;?></option>
                                <?php } ?>
                            </select>
                            <input type="hidden" name="idpersona" value="" />
                               
                          </div>  
                           <div class="input-field col s12 l4">
                               <input name="berat" id="berat" type="number" class="validate" value="<?php echo set_value('berat'); ?>">
                               <label for="berat">Berat (GRAM)</label>
                          </div>
                         </div>
                         <div class="row">
                           <div class="input-field col s12 l6 form-group">
				    <select name="type" id="type" required="required">
				    	<option value="" disabled selected>Choose Category</option>
				         <?php foreach ($kategori->result() as $row){?>
				        <option value="<?php echo $row->id_kategori;?>"><?php echo $row->nama_kategori;?></option>
				        <?php } ?>
				        
				    </select>
				  </div>
                                <div class="input-field col s12 l6 form-group">
				   <select name="type1" id="type1" required="required">
				   	<option value="" disabled selected>Choose Subcategory</option>
				   </select>
				  </div>
                         	</div>
                         	
                         <div class="row">
                         	<div class="input-field col s12">
                                   <textarea name="deskripsi_produk" id="deskripsi_produk" class="materialize-textarea" ><?php echo set_value('deskripsi_produk'); ?></textarea>
                                   <label for="deskripsi_produk">Deskripsi Produk</label>
                              </div>
                         </div>
                         
                                    
                         <div class="row">				 

			 	<div id="size">
			 	</div>
                         </div>
                         <div class="row">
                              <div class="col s12">
                                   <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%; margin-top:20px">Tambah Produk</button>
                              </div>
                         </div>
                    </form>
               </div>
         </div>
     </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#type').on("change",function () {
    		$('#size').html("");
            var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "<?php echo base_url();?>AdminDistro/subcategory",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                $('#type1').html(response);
                console.log(response);
            },
        });
    }); 
});
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('#type1').on("change",function () {
            var subkategori= $(this).find('option:selected').val();
        $.ajax({
            url: "<?php echo base_url();?>AdminDistro/ukuran",
            type: "POST",
            data: "ukuranId="+subkategori,
            success: function (response) {
                $('#size').html(response);
                console.log(response);
            },
        });
    }); 
});
</script>
<script type="text/javascript">
     Dropzone.autoDiscover = false;
    var total_upload = 0;
    $(".detail_produk").show();
    function tambah() {
	total_upload +=1;
     	console.log(total_upload);
     	if(total_upload>=3){
     		$(".detail_produk").show(300);
     	}
     	$("#value").text(total_upload);
     }
     
     function error_saat_upload(){
     Materialize.toast('Failed to upload file!', 5000);
     }
    
    Dropzone.options.myDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 5, // MB
      acceptedFiles: ".jpeg,.jpg,.png,.gif"
    }; 
    $(function() {
      var produk1= new Dropzone("#produk1");
    	produk1.on("error", function(file) {
        Materialize.toast('Failed to upload file!', 5000);
        file.previewElement.addEventListener("click", function() {
    	produk1.removeFile(file);
  	});
    })
    
    produk1.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
     tambah();
    });})
    
    $(function() {
      var produk2= new Dropzone("#produk2");
    	produk2.on("error", function(file) {
        error_saat_upload();
        file.previewElement.addEventListener("click", function() {
    	produk2.removeFile(file);
  	});
    })
    
    produk2.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
     tambah();

    });})
    
     $(function() {
      var produk3= new Dropzone("#produk3");
    	produk3.on("error", function(file) {
        error_saat_upload();
        file.previewElement.addEventListener("click", function() {
    	produk3.removeFile(file);
  	});
    })
    
    produk3.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
	tambah();
    });})
    
     $(function() {
      var produk4= new Dropzone("#produk4");
    	produk4.on("error", function(file) {
        error_saat_upload();
        file.previewElement.addEventListener("click", function() {
    	produk4.removeFile(file);
  	});
    })
    
    produk4.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
	tambah();
    });})
    
     $(function() {
      var produk5= new Dropzone("#produk5");
    	produk5.on("error", function(file) {
        error_saat_upload();
        file.previewElement.addEventListener("click", function() {
    	produk5.removeFile(file);
  	});
    })
    
    produk5.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
	tambah();
    });})
    
     $(function() {
      var produk6= new Dropzone("#produk6");
    	produk6.on("error", function(file) {
        error_saat_upload();
        file.previewElement.addEventListener("click", function() {
    	produk6.removeFile(file);
  	});
    })
    
    produk6.on("success", function(file) {
     Materialize.toast('Succes to upload file!', 5000);
	tambah();
    });})

</script> 
<script type="text/javascript">
$(document).ready(function(){
 $(".button-collapse").sideNav();
  });

</script>
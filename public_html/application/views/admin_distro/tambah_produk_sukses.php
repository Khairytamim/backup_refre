           <div class="col s12 l9 panel-divider">
               <div class="card-panel lighten-2 title-panel">
               	  <i class="material-icons" style="font-size: 100pt; margin-top: 5%;">done</i>
		  <h5>
               	    Produk Berhasil Ditambahkan
               	  </h5>
               	  <a href="<?php echo base_url();?>AdminDistro/tambah_produk" class="waves-effect waves-light btn grey darken-1" style="margin-top: 5%;">Kembali</a>
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
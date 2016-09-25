<div class="container" style="min-height: 80vh">
   <div class="row">
      <div style="margin: 2em 0 2em 0; text-align: center">
         <h4><b>Finalisasi</b></h4>
         </div>
         
	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
		<?php echo validation_errors('<p class="error">'); ?>
	</div>
      
      <div class="row card-panel" style="border-style: solid; border-width: 1px; border-color: lightgrey;">
                          <?php  
              foreach ($produk->result() as $row)  
              {  
            ?> 
	<div class="col l3 m5 s12">
	   <img src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" style="width: 12em">
	</div>
	<div class="col l7 m5 s12">
	   <h5 style="margin-top: 0px;"><?php echo $row->nama_produk;?></h5>
	     <table class="highlight" >
                <tbody><!--
                   <tr>
                      <td style="width: 5em"><b>Ukuran</b></td>
                      <td> - </td>
                   </tr>
                   <tr>
                      <td><b>Lokasi</b></td>
                      <td> - </td>
                   </tr>-->
                   <tr>
                      <td><b>Harga Total</b></td>
                      <td><b>IDR <?php echo $row->harga+25000 ;?></b></td>
                   </tr>
                </tbody>
             </table>

	   <!-- Modal Trigger -->
           <a class="waves-effect waves-light btn modal-trigger" href="#cartmodal" style="margin-top:1em">Pesan</a>

           <!-- Modal Structure -->
           <div id="cartmodal" class="modal">
              <div class="modal-content" style="padding: 4em">
              
              <div class="row">
                 <div class="col l4 m12 s12">
                   <h5>Data Pembeli</h5>
                   <p>Silahkan melengkapi form berikut untuk kemudian kami konfirmasi untuk melanjutkan pembayaran</p>
                 </div>
                 <div class="col l8 m12 s12">
                   <form action="<?php echo base_url();?>Cart/tambah_transaksi_submit/<?php echo $row->id_produk;?>" method="post">
                      <div class="input-field col s12">
                         <input name="ukuran" type="text" class="validate" placeholder="M">
                         <label for="ukuran">Ukuran</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="nama_transaksi" type="text" class="validate" placeholder="Fikry Khairytamim">
                         <label for="nama_transaksi">Nama Pembeli</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="kontak_transaksi" type="text" class="validate" placeholder="081703434379">
                         <label for="kontak_transaksi">Nomor HP Pembeli</label>
                      </div>
                      <div class="input-field col s12">
                         <input  name="email_transaksi" type="text" class="validate" placeholder="fikry.labsky08@gmail.com">
                         <label for="email_transaksi">Email Pembeli</label>
                      </div>
                      <div class="input-field col s6">
                         <input  name="provinsi_transaksi" type="text" class="validate" placeholder="Jawa Timur">
                         <label for="email_transaksi">Provinsi</label>
                      </div>
                      <div class="input-field col s6">
                         <input  name="kota_transaksi" type="text" class="validate" placeholder="Surabaya">
                         <label for="email_transaksi">Kota/Kabupaten</label>
                      </div>
                      <div class="input-field col s12">
                         <textarea name="alamat_transaksi" class="materialize-textarea" placeholder="Jalan Sukolilo Kasih Raya No.14 - 60111"></textarea>
                         <label for="alamat">Alamat Pembeli - Kode Pos</label>
                      </div>
                      <input  name="harga_total" value="<?php echo $row->harga+25000 ;?>" type="hidden">
                      <input  name="id_produk" value="<?php echo $row->id_produk;?>" type="hidden">
                       <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width: 100%;">PESAN</button>
                    </form>
                  </div>
                </div>
                
                <?php }?>
              </div>
           </div>
           
           <!--
           <script>
             $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
           </script>
           -->
           
	
	
        
        
	</div>
      </div>
      
      
   </div>
</div>
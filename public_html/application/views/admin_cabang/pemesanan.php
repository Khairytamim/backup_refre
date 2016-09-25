<div class="col s9 panel-divider offset-s3">
	<div class="card-panel lighten-2 title-panel">
               <h5><i class="material-icons">mail</i><br>Pemesanan</h5>
        </div>      
              <div class="card-panel lighten-2"> 
               <div class="row">
               	<div class="col s12" style="padding:10px">
                    	<ul class="tabs">
                       		<li class="tab col s3"><a class="active" href="#tab1">Belum terkirim</a></li>
                       		<li class="tab col s3"><a href="#tab2">Terkirim</a></li>
                     	</ul>
					<div id="tab1">
                    	  <div class="card-panel">
                         	<table class="responsive-table">
			        <thead>
			          <tr>
			              <th>id</th>
			              <th>Nama Pembeli</th>
			              <th>Nama Produk</th>
			              <th>Jumlah</th>
                          <th>Detail</th>
			          </tr>
			        </thead>
			
			        <tbody>
			          <?php foreach($pemesanan->result() as $r){?>
			          <tr>
			            <td><?php echo $r->id_billing_detail; ?></td>
			            <td><?php echo $r->nama_user; ?></td>
			            <td><?php echo $r->nama_produk; ?></td>
			            <td><?php echo $r->jumlah; ?></td>
                        <td><a class="modal-trigger btn" style="width:100%;" href="#resimodal<?php echo $r->id_billing_detail; ?>">Input Resi</a></td>
			          </tr>
			          <?php } ?>
			          </tbody>
			      </table>
                          </div>
                        </div>
                        
                   	<div id="tab2">
                    	  <div class="card-panel">
                         	<table class="responsive-table">
                            <thead>
                              <tr>
                                  <th>id</th>
                                  <th>Nama Pembeli</th>
                                  <th>Nama Produk</th>
                                  <th>Jumlah</th>
                                  <th>Alamat</th>
                                  <th>Nomor Resi</th>
                              </tr>
                            </thead>

                            <tbody>
                              <?php foreach($pemesanan1->result() as $rw){?>
                              <tr>
                                <td><?php echo $rw->id_billing_detail; ?></td>
                                <td><?php echo $rw->nama_user; ?></td>
                                <td><?php echo $rw->nama_produk; ?></td>
                                <td><?php echo $rw->jumlah; ?></td>
                                <td><?php echo $rw->alamat_penerima; ?></td>
                                <td><?php echo $rw->nomor_resi; ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                          </div>
                        </div>                      
                   	
  		</div>
                  </div>
         </div>
	<?php foreach($pemesanan->result() as $key){?>
           <div id="resimodal<?php echo $key->id_billing_detail; ?>" class="modal">
                <div class="modal-content">
                  <div class="row">
                        <form class="col s12" action="<?php echo base_url();?>adminCabang/update_resi/<?php echo $key->id_billing_detail; ?>" method="post">
                            <div class="input-field col s12 l6">
                                 <h5>Detail Pengiriman</h5>
                                 <p><?php echo $key->nama_user; ?></p>
                                <p><?php echo $key->alamat_user; ?>, <?php echo $key->kota; ?>, <?php echo $key->provinsi; ?>, <?php echo $key->kode_pos; ?></p>
                                <p><?php echo $key->nomor_telepon_user; ?></p>
                              </div>                              
                            <div class="input-field col s12 l6">
                                 <input name="no_resi" type="text" placeholder="BSDHS2CDJ291S" value="<?php echo $key->nomor_resi; ?>">
                                 <label >Nomor Resi</label>
                                  <button type="submit" class="btn" style="margin-top: 2em">INPUT</button> 
                              </div>
                        </form>
                  </div>
                </div>
            </div> 
        <?php } ?>
     </div>
     </div>
</div>

<script>
	  $(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal-trigger').leanModal();
	  });
  
	</script>
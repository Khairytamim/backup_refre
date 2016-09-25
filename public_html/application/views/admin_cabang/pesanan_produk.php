<div class="col s9 panel-divider offset-s3">
	<div class="card-panel lighten-2 title-panel">
               <h5><i class="material-icons">mail</i><br>Pesanan Produk</h5>
        </div>      
              <div class="card-panel lighten-2"> 
               <div class="row">
               	<div class="col s12" style="padding:10px">
                    <table>
			        <thead>
			          <tr>
			              <th data-field="id">Kode Pesanan</th>
			              <th data-field="name">Produk</th>
			              <th data-field="name">Alamat tujuan</th>
			              <th data-field="name">Status</th>
			        </thead>
			
			        <tbody>
			        <?php  
			              foreach ($pesan->result() as $row)  
			              {  
			            ?> 
			          <tr>
			            <td><?php echo $row->id_billing_detail;?></td>
			            <td><?php echo $row->nama_produk;?></td>
			            <td><?php echo $row->alamat_penerima;?>,<?php echo $row->provinsi_penerima;?>,<?php echo $row->kode_pos_penerima;?></td>
			            <td><?php echo $row->status;?></td>
			          </tr>
			          <?php }?>
			        </tbody>
			      </table>
  		</div>
               </div>
         </div>
     </div>
     </div>
</div>
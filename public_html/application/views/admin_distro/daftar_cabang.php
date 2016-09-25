    <div class="col s12 l9">
        <div class="card-panel lighten-2 title-panel">
          <h5><i class="material-icons">store</i><br>Daftar Toko</h5>
        </div>
        
        <div class="card-panel lighten-2">
          <div class="row">
            <div class="col s12">
			                 <table>
			        <thead>
			          <tr>
			              <th data-field="id">Email</th>
			              <th data-field="name">Penanggung Jawab</th>
			              <th data-field="name">Nomor Telp Toko</th>
			              <th data-field="name">Nomor Rekening</th>
			              <th data-field="name">Alamat Toko</th>
			              <th data-field="price">Delete</th>
			          </tr>
			        </thead>
			
			        <tbody>
			        <?php  
			              foreach ($cabang->result() as $row)  
			              {  
			            ?> 
			          <tr>
			            <td><?php echo $row->email;?></td>
			            <td><?php echo $row->nama_penanggung_jawab;?> - <?php echo $row->nomor_telepon_penanggung_jawab;?></td>
			            <td><?php echo $row->nomor_telepon_cabang;?></td>
			            <td><?php echo $row->nomor_rekening_cabang;?></td>
			            <td><?php echo $row->alamat_cabang;?></td>
			            <td><a href="<?php echo base_url();?>AdminDistro/hapus_cabang/<?php echo $row->id_cabang;?>">
	                           <img style="width:20px ;height:20px; margin:auto" src="<?php echo base_url();?>assets/img/delete.png" >
	                           </a></td>
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
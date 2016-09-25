<div class="col s9 panel-divider offset-s3">
  <div class="card-panel lighten-2 title-panel">
    <h5><i class="material-icons">store<sup>add</sup></i><br>Pengaturan Toko</h5>
  </div>

  <div class="card-panel lighten-2">
    <div class="row">
      <div class="col s12" style="padding:10px">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#tab1">Informasi Toko</a></li>
          <li class="tab col s3"><a href="#tab2">Informasi Pembayaran Toko</a></li>
        </ul>
      </div>
    <div class="row" style="padding:10px">
      <div id="tab1" class="col s12">
        <div class="card-panel">
		<?php if(null !=validation_errors('<p class="error">')){?>
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; padding:10px">
					<?php echo validation_errors('<p class="error">'); ?>
				</div>
			<?php }?>
    
          <form action="<?php echo base_url();?>AdminDistro/registration_cabang" method="post">
                  <?php foreach ($info_toko->result() as $row)  { 	?>
            <div class="row">
              <div class="input-field col s12">
                <input name="email" id="username" type="text" class="validate" value="<?php echo $row->email;?>">
                <label for="username">Email</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input name="nama_penanggung_jawab" id="namapj" type="text" class="validate" value="<?php echo $row->nama_penanggung_jawab;?>">
                <label for="namapj">Nama Penanggung Jawab</label>
              </div>
              <div class="input-field col s6">
                <input name="nomor_telepon_penanggung_jawab" id="nopj" type="text" class="validate" value="<?php echo $row->nomor_telepon_penanggung_jawab;?>">
                <label for="nopj">Nomor Telepon Penanggung Jawab</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input name="nomor_telepon_cabang" id="no_hptoko" type="text" class="validate"  value="<?php echo $row->nomor_telepon_cabang;?>">
                <label for="no_hptoko">No Telepon Toko</label>
              </div>
              <div class="input-field col s6">
                <input name="alamat_cabang" id="alamat" type="text" class="validate" value="<?php echo $row->alamat_cabang;?>">
                <label for="alamat">Alamat Toko</label>
              </div>
            </div>

            <!--button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%">Simpan</button-->
          </form>
          <?php }?>
        
        </div>
      </div>
    <div id="tab2" class="col s12">
      <div class="card-panel">

        <?php  
          foreach ($info_toko->result() as $row)  
          {  
        ?>

        <form action="<?php echo base_url();?>AdminCabang/edit_pembayaran_submit" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input name="norek" id="no_rekening_toko" type="text" class="validate" value="<?php echo $row->nomor_rekening_cabang;?>" placeholder="<?php echo $row->nomor_rekening_cabang;?>">
              <label for="no_rekening_toko">Nomor Rekening Toko</label>
            </div>
           
            <div class="input-field col s6">
		  <select name="bank" class="browser-default">
		  <option value="" disabled>BANK</option>
		    <option <?php if($row->bank==1) echo "selected";?> value="1">Mandiri</option>
		    <option <?php if($row->bank==2) echo "selected";?> value="2">BCA</option>
		    <option <?php if($row->bank==3) echo "selected";?> value="3">BRI</option>
		    <option <?php if($row->bank==4) echo "selected";?> value="4">BNI</option>
		  </select>
            </div>
            		
          </div>
          <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%; margin-top: 10px;">Simpan</button>
        </form>
        
        <?php }?>

      </div>

    </div>
  </div>
</div>


</div>
</div>
</div>
</div>
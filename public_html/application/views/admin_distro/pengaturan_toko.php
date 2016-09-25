<div class="col s12 l9">
  <div class="card-panel lighten-2 title-panel">
    <h5><i class="material-icons">settings</i><br>Pengaturan Brand</h5>
  </div>

  <div class="card-panel lighten-2">
    <div class="row" style="margin-bottom:0px;">
      <div class="col s12" style="padding:10px">
        <ul class="tabs">
          <li class="tab col s4"><a class="active" href="#tab1">Informasi Brand</a></li>
          <li class="tab col s4"><a href="#tab2">Informasi Pembayaran</a></li>
        </ul>
      </div>
    <div class="row" style="padding:10px; margin-bottom:0px;">
      <div id="tab1" class="col s12">
        <div class="card-panel" style="margin-bottom:0px;">
          <?php  
            foreach ($info_toko->result() as $row)  
            {  
          ?>
    
          <form action="<?php echo base_url();?>AdminDistro/simpan_pengaturan_toko_post" method="post" enctype="multipart/form-data">
			
            <div class="row">
            <?php if(null !=$error){?>
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; padding:10px">
					<?php echo $error; ?>
				</div>
			<?php }?>
              <div class="input-field col s6">
                <input name="nama_toko" id="nama_toko" type="text" class="validate" value="<?php echo $row->nama_toko;?>" placeholder="<?php echo $row->nama_toko;?>">
                <label for="nama_toko">Nama Brand</label>
              </div>
              <div class="input-field col s6">
                <input name="nama_owner" id="nama_owner" type="text" class="validate" value="<?php echo $row->nama_owner;?>" placeholder="<?php echo $row->nama_owner;?>">
                <label for="nama_owner">Nama Owner</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input name="nomor_teleponowner" id="nomor_hpowner" type="text" class="validate" value="<?php echo $row->nomor_teleponowner;?>" placeholder="<?php echo $row->nomor_teleponowner;?>">
                <label for="nomor_hpowner">Nomor Telepon Owner</label>
              </div>
              <div class="input-field col s6">
                <input name="website" id="website" type="text" class="validate" value="<?php echo $row->website;?>" placeholder="<?php echo $row->website;?>">
                <label for="website">Alamat Website</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input name="nohp_toko" id="no_hptoko" type="text" class="validate" value="<?php echo $row->nohp_toko;?>" placeholder="<?php echo $row->nohp_toko;?>">
                <label for="no_hptoko">No Telepon Kantor</label>
              </div>
              <div class="input-field col s6">
                <input name="alamat_toko" id="alamat" type="text" class="validate" value="<?php echo $row->alamat_toko;?>" placeholder="<?php echo $row->alamat_toko;?>">
                <label for="alamat">Alamat Kantor</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s12">

		    <div class="file-field input-field">
		      <div class="btn grey darken-1">
		        <span><i class="material-icons">perm_media</i></span>
		        <input  type="file" name="userfile" size="20" >
		      </div>
		      <div class="file-path-wrapper">
        	        <input class="file-path validate" type="text" placeholder=" Upload Logo Brand (Format *.png *.jpg)">
                      </div>
		    </div>

              </div>
            </div>
            
	    <div class="row">
	      <div class="col s12">
                <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%">Simpan</button>
              </div>
            </div>
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

        <form action="<?php echo base_url();?>AdminDistro/edit_pembayaran_submit" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input name="norek" id="no_rekening_toko" type="text" class="validate" value="<?php echo $row->nomor_rekening_toko;?>" placeholder="<?php echo $row->nomor_rekening_toko;?>">
              <label for="no_rekening_toko">Nomor Rekening Brand</label>
            </div>
           
            <div class="input-field col s6">
		  <select name="bank" class="browser-default">
		    <option <?php if($row->bank==1)echo "selected";?> value="1">Mandiri</option>
		    <option <?php if($row->bank==2)echo "selected";?> value="2">BCA</option>
		    <option <?php if($row->bank==3)echo "selected";?> value="3">BRI</option>
		    <option <?php if($row->bank==4)echo "selected";?> value="4">BNI</option>
		  </select>
            </div>
            		
          </div>
          <label>Cost Per Transaksi</label>
          <p>
            <input class="grey darken-1" name="opsi" type="radio" id="test5" value="0" <?php if($row->option_keuntungan ==0) echo 'checked';?>/>
            <label for="test5">-5%</label>
          </p>
          <p>
            <input class="grey darken-1" name="opsi" type="radio" id="test6" value="1" <?php if($row->option_keuntungan ==1) echo 'checked';?>/>
            <label for="test6">+10%</label>
          </p>
              
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
<!--link href="http://rajaongkir.com/assets/style/style.css" rel="stylesheet"-->
<div class="col s12 l9 panel-divider">
  <div class="card-panel lighten-2 title-panel">
    <h5><i class="material-icons">store<sup>add</sup></i><br>Tambah Toko</h5>
  </div>

  <div class="card-panel lighten-2">
    <div class="row" style="margin-bottom:0px;">
      <div class="col s12" style="padding:10px">
        <ul class="tabs">
          <li class="tab col s6"><a class="active" href="#tab1">Informasi Toko</a></li>
        </ul>
      </div>
    <div class="row" style="padding:10px; margin-bottom:0px;">
      <div id="tab1" class="col s12">
        <div class="card-panel" style="margin-bottom:0px;">
		<?php if(null !=validation_errors('<p class="error">')){?>
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; padding:10px">
					<?php echo validation_errors('<p class="error">'); ?>
				</div>
			<?php }?>
    
          <form action="<?php echo base_url();?>AdminDistro/registration_cabang" method="post">
            <div class="row">
              <div class="input-field col s6">
                <input name="email" id="username" type="text" class="validate" value="<?php echo set_value('email'); ?>">
                <label for="username">Email</label>
              </div>
              <div class="input-field col s6">
                <input name="password" id="password" type="password" class="validate" value="<?php echo set_value('password'); ?>">
                <label for="password">Password</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s6">
                <input name="nama_penanggung_jawab" id="namapj" type="text" class="validate" value="<?php echo set_value('nama_penanggung_jawab'); ?>">
                <label for="namapj">Nama Penanggung Jawab</label>
              </div>
              <div class="input-field col s6">
                <input name="nomor_telepon_penanggung_jawab" id="nopj" type="text" class="validate" value="<?php echo set_value('nomor_telepon_penanggung_jawab'); ?>">
                <label for="nopj">Nomor Telepon Penanggung Jawab</label>
              </div>
            </div>
            
            <div class="row">
              <div class="input-field col s6">
                <input name="nomor_telepon_cabang" id="no_hptoko" type="text" class="validate"  value="<?php echo set_value('nomor_telepon_cabang'); ?>">
                <label for="no_hptoko">No Telepon Toko</label>
              </div>
              <div class="input-field col s6">
                <input name="alamat_cabang" id="alamat" type="text" class="validate" value="<?php echo set_value('alamat_cabang'); ?>">
                <label for="alamat">Alamat Toko</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s6">
                <input name="kota" id="asal" autocomplete="off" class="inputkota" type="text" class="validate"  value="<?php echo set_value('kota'); ?>">
                <label for="kota">Kota</label>
              </div>
              <input type="hidden" name="kotakota" value="" />
              <div class="input-field col s6">
                <input name="kode_pos" id="kode_pos" type="text" class="validate" value="<?php echo set_value('kode_pos'); ?>">
                <label for="kode_pos">Kode POS</label>
              </div>
            </div>
            
            <div class="row">
	            <div class="input-field col s6">
	              <input name="no_rekening" id="no_rekening" type="text" class="validate" value="<?php echo set_value('nomor_rekening');?>">
	              <label for="no_rekening">Nomor Rekening Toko</label>
	            </div>
	           
	            <div class="input-field col s6">
	              <input name="bank" id="bank" type="text" class="validate" value="<?php echo set_value('bank');?>">
	              <label for="bank">Bank</label>
	            </div>
            		
            </div>

            <button type="submit" class="waves-effect waves-light btn grey darken-1" style="width:100%">Simpan</button>
          </form>
          
        
        </div>
      </div>
 
  </div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.24/jquery.autocomplete.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/auto_search.js"></script>
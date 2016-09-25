<style>
    .user-panel {
        color:rgba(0,0,0,0.87);
        padding:1.2em;
        border:solid 1px lightgrey;
        margin-bottom: 1em;
    }
</style>

<div class="row" style="margin-top: 2em">
    <div class="container">
        <div class="col s12">
            <span style="font-weight: bold">
                <span style="border-radius: 100px; background-color: #e45d25; padding: 0.4em  0.9em; color: white">2</span>
                Konfirmasi Pesanan & Alamat
            </span>
        </div>

    <form action="<?php echo base_url();?>user/pre_pembayaran" method="post">
	<div class="col s12 m12 l12" style="margin-top: 2em">
        <div class="user-panel">
            <table style="min-width:600px ;overflow-x: scroll">
                <thead style="border-style: none">
                  <tr>
                      <th style="width: 10em; color: #e45d25">Barang</th>
                      <th></th>
                      <th style="color: #e45d25">Harga</th>
                      <th style="color: #e45d25">Qty</th>
                      <!--th style="color: #e45d25">Biaya Pengiriman</th-->
                  </tr>
                </thead>

                <tbody>
                     <?php $subtotal=0;if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
                      $ukuran_array = sizeof($_SESSION['cart']);
                      $j=0;
                  for ($i=0; $i < ($ukuran_array/13); $i++){
                  if($_SESSION['cart'][$j+7]==1){
                      ?>
                  <tr>
                    <td>
                    
                        <img src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $_SESSION['cart'][$j];?>.jpg" style="width: 8em">
                    </td>
                    <td>
                        <b><?php echo $_SESSION['cart'][$j+1];?></b><br>
                        <ul>
                            <li>Ukuran: <?php echo $_SESSION['cart'][$j+6];?></li>
                            <li>Id Toko: <?php echo $_SESSION['cart'][$j+3];?></li>
                            <li>Tempat Toko: <?php echo $_SESSION['cart'][$j+4];?></li>
                            <li>Id Kota: <?php echo $_SESSION['cart'][$j+5];?></li>
                        </ul>
                    </td>
                    <td>
                        <p>Rp <?php echo number_format ($_SESSION['cart'][$j+2], 0, '','.');?></p>
                    </td>
                    <td>
                        <p><?php echo $_SESSION['cart'][$j+8];?></p>
                    </td>
                    <!--td><div id="biaya<?php echo $i;?>"></div></td-->
                  </tr>
                   <?php $subtotal=$subtotal+($_SESSION['cart'][$j+2]*$_SESSION['cart'][$j+8]);} $j=$j+13; }?>
                </tbody>
              </table>
        </div>
	</div>
        
        
        
        <div class="col s12 m7">
            <?php foreach ($data->result() as $row){ ?>
            <div class="user-panel" style="min-height: 12.5em">
                <h5>Alamat Pengiriman</h5>
                <p>
                    <?php echo $row->alamat_user;?>
                </p>
                <a href="#modal-alamat" class="modal-trigger btn inverted" style="width:100%; margin-top: 13px">UBAH</a>
            </div>
            <?php } ?>
        </div>
        

	<div class="col s12 m5">
        <div class="user-panel">
            <!--form action="<?php echo base_url();?>user/confirm" method="post"-->
            <h5>Detail Pesanan</h5>
            <div class="col s6">
                <p>
                    <b>Subtotal:</b><br>
                </p>
            </div>
            <div class="col s6">
                <p>
                    <b style="color:#e45d25">Rp <?php echo number_format ($subtotal, 0, '','.'); ?></b><br>
                </p>
            </div>
            <button class="btn" type="submit" style="margin-top: 1em; width:100%">LANJUTKAN KE PEMBAYARAN</button>
        </div>
	</div>
    </form>


    </div>
</div>


    
<div id="modal-alamat" class="modal">
    <div class="modal-content">
    <h5>Alamat Pengiriman</h5>
        <div class="row">
            <?php foreach ($data->result() as $row){ ?>
                    <div class="col s12">
                        <form action="<?php echo base_url();?>User/simpan_alamat" method="post">
                            <div class="input-field col s12">
                                <input  name="provinsi" type="text" class="validate" value="<?php echo $row->provinsi; ?>">
                                <label>Provinsi</label>
                            </div>
                                <div class="input-field col s6">
                                    <input name="kota" autocomplete="off" class="inputkota" type="text" class="validate"  value="<?php echo $row->kota; ?>">
                                    <label for="kota">Kota</label>
                                </div>
                                <input type="hidden" name="kotakota" value="" />
                                <div class="input-field col s6">
                                    <input name="kode_pos" type="text" class="validate" value="<?php echo $row->kode_pos; ?>">
                                    <label>Kode POS</label>
                                </div>
                            <div class="input-field col s12">
                                <textarea name="alamat" class="materialize-textarea"><?php echo $row->alamat_user;?></textarea>
                                <label>Detail alamat</label>
                            </div>
                            <button type="submit" class="btn" style="width: 100%;">SIMPAN ALAMAT</button>
                        </form>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
            





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.24/jquery.autocomplete.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/auto_search.js"></script>
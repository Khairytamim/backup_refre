<div class="row" style="margin-top: 2em; min-height:60vh">
    <div class="container">
        <div class="col s12 l9">
            <span style="font-weight: bold"><span style="border-radius: 100px; background-color: #e45d25; padding: 0.4em  0.9em; color: white">1</span> Login/Beli Langsung </span>
            
            
                <div class="row" style="margin-bottom:0px; margin-top: 1em; padding-right: 1.5em">
                    <div class="col s12" style="margin-bottom: 1em">
                        <ul class="tabs">
                            <li class="tab col s4"><a class="active" href="#tab1">Login</a></li>
                            <li class="tab col s4"><a href="#tab2">Beli Langsung</a></li>
                        </ul>
                    </div>
                    <div class="row" style="margin-bottom:0px;">
                        <div id="tab1" class="col s12">
                            <div class="col s12">
                                <form action="<?php echo base_url();?>Home/login_dashboard" method="post">
                                    <div class="input-field col s12">
                                        <input name="email" type="text" placeholder="e.g. fikry@seveid.com">
                                        <label >Email</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  name="password" type="password" placeholder="*****">
                                        <label>Password</label>
                                    </div>
                                    <button type="submit" class="btn" style="margin-top: 2em">LANJUT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="col s12">
                        <div class="row">
                            <div class="col s12">
                                <form action="<?php echo base_url();?>Cart/tambah_transaksi_submit" method="post">
                                    <div class="input-field col s12">
                                        <input  name="nama_transaksi" type="text" class="validate" placeholder="Fikry Khairytamim">
                                        <label for="nama_transaksi">Nama Pembeli</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  name="kontak_transaksi" type="text" class="validate" placeholder="081703434377">
                                        <label for="kontak_transaksi">Nomor HP Pembeli</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input  name="email_transaksi" type="text" class="validate" placeholder="fikry.labsky08@gmail.com">
                                        <label for="email_transaksi">Email Pembeli</label>
                                    </div>
                                        <div class="input-field col s6">
                                            <input name="kota_transaksi" autocomplete="off" class="inputkota" type="text" class="validate"  value="<?php echo set_value('kota'); ?>" placeholder="Surabaya">
                                            <label for="kota_transaksi">Kota</label>
                                        </div>
                                        <input type="hidden" name="kotakota" value="" />
                                        <div class="input-field col s6">
                                            <input name="kode_pos_transaksi" type="text" class="validate" value="<?php echo set_value('kode_pos'); ?>" placeholder="60111">
                                            <label for="kode_pos_transaksi">Kode POS</label>
                                        </div>
                                    <div class="input-field col s12">
                                        <textarea name="alamat_transaksi" class="materialize-textarea" placeholder="Jalan Sukolilo Kasih Raya No.14"></textarea>
                                        <label for="alamat">Alamat Pembeli</label>
                                    </div>
                                    <button type="submit" class="btn" style="width: 100%;">PESAN</button>
                                </form>
                            </div>
                        </div>
                    </div>
	
                </div>
            


        </div>
        <div class="col s12 l3" style="border: solid 1px lightgrey; padding: 1em">
            <h5>Detail Pesanan</h5>
            <div class="col s6">
                <p><b>Subtotal:</b><br></p>
            </div>
            <div class="col s6">
                <p><b style="color: #e45d25">Rp 666.666</b><br></p>
            </div>
        </div>
    </div>
</div>



</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.24/jquery.autocomplete.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/auto_search.js"></script>
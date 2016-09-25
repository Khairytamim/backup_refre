<div class="row" style="margin-top: 2em">
    <div class="container">
        <div class="col s12">
            <span style="font-weight: bold">
                <span style="border-radius: 100px; background-color: #e45d25; padding: 0.5em  0.9em; color: white">3</span>
                Pembayaran
            </span>
        </div>
        <!--ini yang aku bingung mas biar yang munculsatu transaksi aja-->
        <?php foreach ($confirm ->result() as $row){ ?>
        <?php if($row->status_bayar==0){?>
        <div class="col s12 m8" style="margin-top: 3em">
            <div style="font-size: 1.5em; line-height: 1.2; margin-bottom: 2em">
                <b>
                    <span class="orange">ID Pesanan: <?php echo $row->id_billing; ?> </span><br>
                    Total Belanja: Rp <?php echo $row->total; ?>
                </b>
            </div>

            
            <p>Silakan melakukan pembayaran via transfer ke rekening: </p>
            <p><b>
                BCA 38905538877 a/n Muhammad Khatami<br>
                BNI 0364216085 a/n Muhammad Faiq Purnomo<br>
                MANDIRI 9000013081006 a/n Fikry Khairytamim<br>
            </b></p>
            <p>
                Mohon di-transfer dengan angka pas sejumlah <b>Rp <?php echo $row->total+$row->id_billing; ?></b> dan cantumkan ID Pesanan Anda saat transfer agar transaksi ini dapat diproses dengan cepat. Transaksi ini berlaku jika transfer pembayaran dilakukan maksimal 1x24 jam setelah pemesanan, konfirmasi dapat dilakukan dengan cara mengisi form konfirmasi pembayaran berikut, atau pada halaman <a class="orange" href="#">Konfirmasi Pembayaran</a>. Transaksi akan diproses setelah kami menerima pembayaran Anda.
            </p>
            <p>
                Status pesanan dapat Anda pantau di halaman <a class="orange" href="<?php echo base_url();?>user/status">Status Pesanan</a>.
            </p>
            <p>
                Informasi lebih lanjut, silakan menghubungi (021) 2929-2828 pada hari kerja.
            </p>
            <br />
<!--
            <div style="font-size: 1.5em; line-height: 1.2">
                <b>APABILA TELAH MELAKKUKAN</b><br />
                <b>PEMBAYARAN SILAHKAN KONFIRMASI</b>
            </div>  
-->
        </div>
        <div class="col s12 m4" style="border: solid 1px lightgrey; padding: 1em; margin-top:4em">
                <div class="col s12" style="margin-bottom:1em">
                    <h5>Konfirmasi Pembayaran</h5>
                </div>
                <div class="col s4">
                    <label>Rekening</label>
                    <select class="browser-default">
                        <option value="" disabled selected>Rekening</option>
                        <option value="1">BCA</option>
                        <option value="2">BNI</option>
                        <option value="3">MANDIRI</option>
                    </select>
                    
                </div>
                <div class="input-field col s8">
                    <input placeholder="xxxxxxx" id="no_rek" type="text" class="validate">
                    <label for="no_rek">No. Rekening</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Rp 999.999" id="amount" type="number" class="validate" min="1">
                    <label for="amount">Jumlah Transfer</label>
                </div>
                <button class="btn" type="submit" style="margin-top: 1em; width:100%">KONFIRMASI</button>
            </div>
        <?php }} ?>
    </div>
</div> 
<style>
    .orange {
        color: #e45d25;
        font-weight: 700;
    }
</style>
<?php $i= 0;foreach ($cabang->result() as $row) { if($i==0) echo "<p>Barang tersedia di daerah:</p>"?> 
    <input class="with-gap" name="kota" type="radio" id="test5" value="<?php echo $row->id_kota;?>|<?php echo $row->kota;?>|<?php echo $row->id_cabang;?>" />
    <label for="test5"><?php echo $row->kota; $i = $i +1;?></label>
<?php }?>
<?php if($i==0) echo "Barang tidak tersedia";?>
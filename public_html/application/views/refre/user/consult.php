<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php
      $this->load->view('refre/parts/navbar');
    ?>
    
    <section>
        <div class="row" style="margin-top: 1.5em">
            <div class="container">
                <div class="col s12" style="margin-bottom: 1.5em">
                    <b>Consult by Category</b>
                    <div class="divider" style="height: 3px; background-color: black; margin-top:0.5em"></div>
                </div>
                <form method="post" action="/refre/consult_post">
                <?php foreach ($kategori->result() as $key) {?>
                <div class="col s6 m3 cat-items">
                    <img src="<?php echo base_url();?>assets/imgrefre/category-thumb/<?php echo $key->nama_gambar?>" class="category-image">
                    <input type="radio" name="kategori" class="filled-in" id="kategori<?php echo $key->id_category_chat?>"  value="<?php echo $key->id_category_chat?>" required/>
                    <label for="kategori<?php echo $key->id_category_chat?>"><b><?php echo $key->nama?></b></label>
                </div>
                <?php }?>                
                <button type="submit" class="btn" style="width:100%; background-color: black; margin-top: 1em">START CHAT</button>
            </form>
            </div>
        </div>
    </section>
   <?php
      $this->load->view('refre/parts/footer');
    ?>
</body>
</html>
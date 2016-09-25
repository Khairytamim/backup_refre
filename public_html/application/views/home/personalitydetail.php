<div class="row" style="margin-top: 3em">
    <div class="container">
        <div class="col s5">
            <img src="<?php echo base_url();?>assets/img/personality/models/001.JPG" style="width:100%">
        </div>
        <div class="col s7">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum dolor sit amet</p>
        </div>
        <div class="col s12" style="margin-top:5em">
            <div style="margin-bottom: 2em; text-align:center">
                <span class="cat-title">worn products</span>
            </div>
            
            
            <?php for ($i=0;$i<4;$i++) { ?>
            <div class="col s6 m3">
                <div class="card_1">
                    <div class="card-image"> 
                        <img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/134.jpg">   	
                    </div> 
                    <div class="card-content">
                        <p class="truncate"><b>NAMA PRODUK</b></p>
                        <p class="truncate">NAMA BRAND</p>
                        <p style="text-decoration:line-through">
                            Rp 125.000
                        </p> 
                        <p>
                            <b>
                                <span class="chip right" style="background-color: rgba(228,93,37,1); color: white;">10% OFF</span>
                                Rp 125.001
                            </b>
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>
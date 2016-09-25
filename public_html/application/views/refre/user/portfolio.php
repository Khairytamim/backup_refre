<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <?php
      $this->load->view('refre/parts/navbar-portfolio');
    ?>
    
    <section>
        <div class="row" id="mode-select">
            <div class="container">
                <a href="<?php echo base_url();?>Refre/portfolio" style="color:white">
                <div class="col s12">
                    <h5 style="letter-spacing:5px">WORLD PORTFOLIO</h5>
                </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="container">
            <div class="col s12"> 
              <form action="<?php echo base_url();?>Refre/search_portfolio" method="post">
                <div class="input-field">
                  <input id="search" name="search" type="search" required>
                  <label for="search">SEARCH</label>
                  <i class="material-icons">X</i>
                </div>
              </form>
            </div>
            </div>
            <div class="container">
                <div class="col s6" style="text-align:left">
                <form action="<?php echo base_url();?>refre/style" method="post">
                    <!--div style="let ter-spacing:2px">CATEGORY</div-->
                    <select name="style" class="browser-default" style="color:black">
                        <option value="" disabled selected>Style</option>
                        <option value="1">Casual</option>
                        <option value="2">Classy</option>
                        <option value="3">Preppy</option>
                        <option value="4">Punk</option>
                        <option value="5">Rocker</option>
                        <option value="6">Vintage</option>
                        <option value="7">70's</option>
                        <option value="8">80's</option>
                        <option value="9">90's</option>
                        <option value="10">Hip Hop</option>
                        <option value="11">Future</option>
                        <option value="12">Swimwear</option>
                    </select>
                </form>
                </div>
                <div class="col s6" style="text-align:left">
                    <!--div style="let ter-spacing:2px">GENDER</div-->
                    <select class="browser-default" style="color:black">
                        <option value="" disabled selected>Gender</option>
                        <option value="1">Men</option>
                        <option value="0">Women</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:2em">
            <div class="container">
<!--                <center style="margin-bottom:2em; letter-spacing:5px;"><h5>MY COLLECTION</h5></center>-->
<!--                <div class="divider" style="height: 3px; background-color: black; margin-top:0.5em"></div>-->
                <div class="col s12" id="collection" style="padding:0">
                <?php foreach ($myuploads->result() as $row){ ?>
                    <a href="<?php echo base_url();?>refre/collection_detail/<?php echo $row->id_foto;?>" class="collection2">
                        <div class="col s4" style="padding:0.2em">
                            <div class="collection-container">
                                <img src="../assets/img/refre/<?php echo $row->foto?>" class="collection-thumb" style="width:100px;margin-top:20px">
                                <div class="collection-info">
                                    <b style="margin-right:0.5em"><img src="../assets/refre/img/ui/heart.png" style="height:1em"><?php if($like1==0 || empty($like1[$row->id_foto])) {echo'0';} else echo $like1[$row->id_foto];?></b>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>
                
            </div>
        </div>
    </section>
    <?php
      $this->load->view('refre/parts/footer');
    ?>
    
    
    
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
    </script>
</body>
</html>
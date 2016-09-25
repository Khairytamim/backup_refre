<!DOCTYPE html>
<html>
<head>
    <?php
      $this->load->view('refre/parts/head');
    ?>
</head>
<body>
    <div id="login">
        <div class="row">
            <div class="container">
                <form action="/refre/chatting" method="post">
                    <div class="input-field col s12 m6 offset-m3">
                        <h3 style="font-family:AvantGarde; margin-top:23vh">R E F R E</h3>
                        <input name="email" placeholder="Email" id="username" type="email" class="validate" style="background-color:white; color:black; padding-left:1em; padding-right:1em; width:90%">
                        <input name="password" placeholder="Password" type="password" class="validate" style="background-color:white; color:black; padding-left:1em; padding-right:1em; width:90%">
                    </div>
                    <div class="input-field col s12 m6 offset-m3">
                        <button type="submit" class="btn" style="width:100%">LOG IN</a>
                    </div>
                </form>
                <div class="col s12 m6 offset-m3" style="margin-top: 2em">
                    <p style="color:white">Don't have account? <a class="modal-trigger" href="#signupmodal" style="color:white">Sign up here.</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="signupmodal" class="modal">
        <div class="modal-content">
          <div class="row">
             <div class="col l4 m12 s12" style="padding: 1em; ">
                <h4>Daftar</h4>
                <p>Isi data-data anda dengan benar untuk kemudahan dan kenyamanan transaksi anda</p>
                 <?php if(null !=validation_errors('<p class="error">')){?>
                     <div style="display:inline-block; width:100%; height:auto; background-color:#f44236; padding:20px">
                     <?php echo validation_errors('<p class="error">'); ?>
                        </div>
                      <script>
                     $(document).ready(function(){
                        $('.modal-trigger').leanModal();
                        $('#signupmodal').openModal();
                      });
                          </script>
                <?php }?> 
                 <?php if (isset($errorsignup)==true){?>
                 <div style="display:inline-block; width:100%; height:auto; background-color:#f44236; padding:20px">
                     <?php echo 'Silahkan Cek Kembali Data Sesuai Contoh yang Ada';?>
                        </div>
                        <script>
                     $(document).ready(function(){
                        $('.modal-trigger').leanModal();
                        $('#signupmodal').openModal();
                      });
                          </script>
                    <?php } ?>
             </div>
             <div class="col l8 m12 s12" style="padding: 1em 1em 0 1em">
                <form class="col s12" action="<?php echo base_url();?>Daftarmember/registration" method="post">
                          <div class="input-field col s12">
                             <input name="nama" type="text" class="validate" placeholder="e.g. Fikry Khairytamim">
                             <label>Nama</label>
                          </div>
                          <div class="input-field col s12">
                             <input name="email" type="text" class="validate" placeholder="e.g. fikry@seveid.com">
                             <label>Email</label>
                          </div>
                          <div class="input-field col s12">
                             <input  name="no_hp" type="text" class="validate" placeholder="+6281703434377">
                             <label>Nomor HP</label>
                          </div>
                <!--div class="row">
                  <div class="input-field col s4">
                    <input name="provinsi" id="provinsi" type="text" class="validate" value="<?php echo set_value('provinsi'); ?>">
                    <label for="provinsi">Provinsi</label>
                  </div>
                  <div class="input-field col s4">
                    <input name="kota" id="asal" autocomplete="off" class="inputkota" type="text" class="validate"  value="<?php echo set_value('kota'); ?>">
                    <label for="kota">Kota</label>
                  </div>
                  <input type="hidden" name="kotakota" value="" />
                  <div class="input-field col s4">
                    <input name="kode_pos" id="kode_pos" type="text" class="validate" value="<?php echo set_value('kode_pos'); ?>">
                    <label for="kode_pos">Kode POS</label>
                  </div>
                </div>
                          <div class="input-field col s12">
                          <input name="alamat" type="text" class="validate"  placeholder="Jalan TB Simatupang Raya 60111">
                          <label >Alamat</label>
                          </div-->
                          <div class="input-field col s12">
                             <input name="password" type="password" class="validate" placeholder="*****">
                             <label>Sandi (minimal 6 karakter)</label>
                          </div>
                          <div class="input-field col s12">
                             <input name="con_password" type="password" class="validate" placeholder="*****">
                             <label>Ketik Ulang Sandi</label>
                          </div>
                          <!-- div class="input-field col s12 l6">
                              <input type="date" class="datepicker">
                             <label>Tanggal Lahir</label>
                          </div -->
                          <p class="col s12" style="margin-top: 1.25em">
                         <input type="checkbox" class="filled-in" id="filled-in-box" />
                             <label for="filled-in-box">Saya setuju dengan syarat dan ketentuan <b>refre.co</b></label>
                          </p>
                          <div class="col s12" style="margin-top: 1.25em">
                             <button type="submit" class=" btn">DAFTAR</button>
                             <!--button type="submit" class="btn btn-red">DAFTAR DENGAN GOOGLE</button-->
                          </div>
                </form>
             </div>
          </div>

        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript">
      <?php if(isset($_SESSION['status'])) echo "Materialize.toast('".$_SESSION['status']."', 4000);";?>
    </script>
    <script>
	  $(document).ready(function(){
	    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	    $('.modal-trigger').leanModal();
	  });
    </script>
    <style>
    a.kategori {color: dimgray; transition: 0.2s;}
    #a {color: rgba(228,93,37,0.87);}
     a:hover.kategori {opacity: 0.6; transition: 0.2s;}
    #catdropdown{background-color:white; position: fixed; width: 100%; z-index:100; overflow:hidden; height: 0px; transition:0.3s; opacity: 0;}
    #dimbg{position:fixed; width:100%; background-color:rgba(0,0,0,0.5); z-index:95; height:100%; display: none}
	</style>
</body>
</html>
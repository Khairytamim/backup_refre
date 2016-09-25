<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/refre/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="/assets/refre/css/refre.css">
    <link rel="manifest" href="/manifest.json">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div id="login">
        <div class="row">
            <div class="container">
                <div class="input-field col s12 m6 offset-m3">
                    <h3 style="font-family:AvantGarde; margin-top:23vh">R E F R E</h3>
                    <a style="margin-top:20px"  class="waves-effect waves-light btn-large" style="width:100%" href="http://line.me/ti/p/~calvina.wiyasih">FASHION STYLIST 1</a>
                    <a style="margin-top:20px"  class="waves-effect waves-light btn-large" style="width:100%" href="http://line.me/ti/p/~rositanatalia">FASHION STYLIST 2</a>
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
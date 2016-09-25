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
    <div class="row" id="headline">
        <div class="container">
            <div class="col s12" style="padding-top:3em; padding-bottom:3em; text-align:center">
<!--                <img class="circle-clip" src="../assets/refre/img/pp.png" style="height:9em">-->
                <!--                    <h4>Welcome Back</h4>-->
                <form id="form1" runat="server" action="/refre/edit_pp" method="post" enctype="multipart/form-data">
                    <div class="col s12">
                        <div class="file-field input-field">
                          <input type='file' name='userfile' id="imgInp" style="display: none;" required/>
                    <img class="rectangele-clip" id="blah" src="http://refre.co/assets/refre/img/ui/add.png" alt="your image" style="background-color:white;width:9em"/>
                          </div>
                        </div>
                    <div class="col s12">
                    <button type="submit" name="upload"  class="waves-effect waves-light btn" style="margin-top:0.5em; background-color:black">Change Profile Picture</button>
                    </div>
                </form>

          </div>
        </div>
    </div>


</section>
<?php
$this->load->view('refre/parts/footer');
?>


<script src="../assets/refre/js/jquery.min.js"></script>
<script src="../assets/refre/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
        $('ul.tabs').tabs();
        $('#blah').bind('click', function(e) {
            $('#imgInp').click();
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function(){
            readURL(this);
        });
    });
</script>
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
                <form id="form1" runat="server" action="/refre/upload_perid" method="post" enctype="multipart/form-data">
                    <input type='file' name='file' id="imgInp" style="display: none;" required/>
                    <img class="rectangle-clip" id="blah" src="../assets/refre/img/ui/add.png" alt="your image" style="background-color:white;height:9em;width:9em"/>

                    <input type="text" name="title" placeholder="Title">
                    <select name="category" class="browser-default" style="background-color:black;color:white">
                        <option value="" disabled selected>Choose Style</option>
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
                    <div>
                        <p>
                          <input name="gender" id="men" value="1" type="radio" />
                          <label for="men">Male</label>
                          <input name="gender" id="women" value="0" type="radio" />
                          <label for="women">Female</label>
                        </p>
                    </div>
                    <input type="text" name="tag" placeholder="Tag">
                    <input type="text" name="bc" placeholder="Buyer's Code">
                    <button type="submit" name="upload"  class="waves-effect waves-light btn" style="margin-top:0.5em; background-color:black">Submit</button>

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
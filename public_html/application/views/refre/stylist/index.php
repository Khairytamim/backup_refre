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
                <div class="input-field col s12 m6 offset-m3 hide-on-med-and-down">
                    <h3 style="font-family:AvantGarde; margin-top:23vh; color:white">please login with your mobile device</h3>
                </div>
                <div class="input-field col s12 m6 offset-m3 hide-on-large-only">
                    <h3 style="font-family:AvantGarde; margin-top:23vh; color:white">L O G I N S T Y L I S T</h3>
                <form action="/refre/verifikasi_login_stylist" method="post">
                    <input name="email" placeholder="Email" id="username" type="email" class="validate" style="background-color:white; color:black; padding-left:1em; padding-right:1em; width:90%">
                    <input name="password" placeholder="Password" type="password" class="validate" style="background-color:white; color:black; padding-left:1em; padding-right:1em; width:90%">
                <div class="input-field col s12 m6 offset-m3">
                    <button type="submit" class="btn" style="width:100%">LOG IN</a>
                </div>
                </form>
                </div>
            </div>
        </div>
        </div>
</body>
</html>
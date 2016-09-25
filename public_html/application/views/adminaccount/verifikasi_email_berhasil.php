<div class="container">
  <div class="row" style="margin-top:10px">
      <div class="row">
        <div class="col s12 l8">
         <img src="<?php echo base_url();?>assets/img/baju/man-and-woman-on-street.jpg" style="width:100%"/>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-content">
            	<p><b>VERIFIKASI EMAIL BERHASIL</b><br /></p>
                <span style="font-size:12px">ANDA MEMILIKI AKUN FACEBOOOK?</span>
                <a class="waves-effect waves-light btn" style="width:100%; margin-top:20px; margin-bottom:20px; background-color:#385678">SIGN IN WITH FACEBOOK</a>
                <span style="font-size:12px">Kami tidak akan pernah posting dengan mengatas-namakan atau membagi informasi apapun tanpa persetujuan Anda</span
                ><span style="font-size:12px"><br><br>* Wajib diisi</span>
                <!---------->
                <div class="row">
                	<div style="display:inline-block; width:100%; height:auto; background-color:#f44236; margin-bottom:10px; border-radius:8px">
					<?php echo validation_errors('<p class="error">'); ?>
				</div>
    				<form class="col s12" action="<?php echo base_url();?>account/registration" method="post">
      				<div class="row">
        					<div class="input-field col s12">
          					<input name="email" id="email" type="email" class="validate" value="<?php echo set_value('email'); ?>">
          					<label for="email">Email *</label>
        					</div>
        					<div class="input-field col s12">
                                   <input name="password" id="password" type="password" class="validate" value="<?php echo set_value('password'); ?>">
                                   <label for="password">Password *</label>
        					</div>      
      				</div>
        				<div class="row">
        					<div class="input-field col s12">
                              	<button type="submit" class="waves-effect waves-light btn" style="width:100%; margin-top:20px; margin-bottom:20px; background-color:#385678">login</button>
        					</div>
        				</div>
        			</div>
    			</form>
  		</div>
                <!---------->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#email").blur(function(){
     	var email = $("#email").val();
        	if(email != 0)
        	{
          	if(isValidEmailAddress(email))
            	{
               	$("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               	email_con=true;
               	//register_show();
            	} else {
                	$("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
            	}
        	}
        	else 
		{
          	$("#email_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
        	}
    });

	$("#nomor_hp").blur(function(){
     var nomor = $("#nomor_hp").val();  
     if(nomor != 0)
     {   
     	if(isValidNomorHp(nomor))
          {
          	$("#nomor_hp_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
               email_con=true;
               //register_show();
           } 
		 else 
		{	
               $("#nomor_hp_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
          }
    }
    else 
    {
    		$("#nomor_hp_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
    }

    });
	
	$("#password").blur(function(){
     var password = $("#password").val();
        
     if($("#password").val().length >=6)
     {    
     	if(isValidPassword(password))
     {
          $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/yes.png')" });
          email_con=true;
          //register_show();
          } 
		else 
		{
               $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
          }
     }
     else 
	{
          $("#password_verify").css({ "background-image": "url('<?php echo base_url();?>assets/images/no.png')" });
     }
  }); 
});

function isValidPassword(password) {
 		var pattern = new RegExp(/^[a-z0-9_-]{6,32}$/i);
 		return pattern.test(password);
	}
function isValidEmailAddress(emailAddress) {
 		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
 		return pattern.test(emailAddress);
	}
function isValidNomorHp(nomorhp) {
 		var pattern = new RegExp(/^[0-9]{6,32}$/i);
 		return pattern.test(nomorhp);
	}

</script>
</body></html>
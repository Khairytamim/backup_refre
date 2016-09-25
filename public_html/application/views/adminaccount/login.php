<div class="container">
  <div class="row" style="margin-top:5%">
  
  	<div class="row">
  	<center style="color:#00a9d3"><h2><b>jadi yang kamu mau!</b></h2></center>
        </div>
        
      <div class="row">
        <div class="col s10 l6">
                	<h1 align="right"><b>LOGIN</b></h1> 
                	<h1 align="right">TOKO</h1>       	
        </div>
        <div class="col s12 l4">
            <div class="card-panel" style="border-left-style: solid; border-width: 1px; border-color: #e0e0e0; height: 350px;">
            <div class="card-content">
            <div class="container">
            	
                
                <!---------->
                <div class="row">

    				<form class="col s12" action="<?php echo base_url();?>Daftaradmin/verifikasi_login_cabang" method="post">
	                        <div class="row">
	                                <div class="input-field col s12">
		                                <input autofocus  name="emailtoko" id="emailtoko" type="email" class="validate" value="<?php echo set_value('emailtoko'); ?>">
		                                <label class="active" for="emailtoko">Email/Username *</label>
		                        </div>
	                                <div class="input-field col s12">
	                                       <input autofocus  name="password" id="password" type="password" class="validate" value="<?php echo set_value('password'); ?>">
	                                       <label class="active" for="password">Password *</label>
	                                </div>      
	                        </div>
			      <p style="font-size:13px">* Harus diisi</p>
                              <button type="submit" class="waves-effect waves-light btn grey darken-1">login</button>
                              

                        
    			     </form>
                    </div>
                </div>
  		        </div>
                <!---------->
            
            </div>
        </div><!--ini ujungnya-->
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
	$("#emailtoko").blur(function(){
     	var email = $("#emailtoko").val();
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

	$("#nomor_teleponowner").blur(function(){
     var nomor = $("#nomor_teleponowner").val();  
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
<script>
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  </script>
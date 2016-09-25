<div class="navbar-fixed">
    <nav style="background-color:white; color:black;">
        <div class="nav-wrapper">
            <a href="<?php echo base_url();?>home" class="brand-logo center" style="color:black; font-family:AvantGarde">R E F R E</a>
            <div id="burger"><a onclick="openNav()"><b>=</b></a></div>
        </div>
    </nav>
</div>
	<script>
	var opened = false;
	function openNav() {
	    if (opened == true) closeNav()
	    else {
	       document.getElementById("catdropdown").style.height= "12em";
	       document.getElementById("catdropdown").style.opacity= "1";
	       document.getElementById("dimbg").style.display= "block";
	       opened = true;
	       }
	}
	
	function closeNav() {
	    if (opened == true) {
	    	document.getElementById("catdropdown").style.height = "0";
	    	document.getElementById("catdropdown").style.opacity= "0";
	    	document.getElementById("dimbg").style.display= "none";
	    	opened = false;
	    	}
	}
  
	  $('.dropdown-button').dropdown({
		inDuration: 300,
		outDuration: 225,
	  	constrain_width: false, // Does not change width of dropdown to that of the activator
		hover: true, // Activate on hover
		gutter: 0, // Spacing from edge
		belowOrigin: true, // Displays dropdown below the button
		alignment: 'left' // Displays dropdown with edge aligned to the left of button
		}
		);
	</script>
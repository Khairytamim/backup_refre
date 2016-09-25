<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<?php 
			foreach ($msg->result() as $key) {?>
				<p><?php echo $key->id_user ?>: <?php echo $key->pesan ?></p>
			<?php } ?>
	</div>
		<input type="text" name="msg" id="msg">
		<input type="submit" onClick="kirim_pesan();">

		<form method="post" enctype="multipart/form-data">
			<input type="file">
			<input type="submit">
		</form>

	<script type="text/javascript">
	var window_focus;

	$(window).focus(function() {
	    window_focus = true;
	}).blur(function() {
	    window_focus = false;
	});

	function kirim_pesan(){
		var pesan = $('#msg').val();
		$('#msg').val("");
		console.log(pesan);
		$.ajax({
		    url: "<?php echo base_url(); ?>chat/kirim_pesan",
		    type: "POST",
		    data: { 'user':'1', 'tipe':'user', 'msg':pesan },
		    success: function (response) {
		    },
		  });
	}

	var myInterval = setInterval(function () {
		if(window_focus==true){
		 	$.ajax({
			    url: "<?php echo base_url(); ?>chat/get_pesan",
			    type: "POST",
			    data: { 'user':'100' },
			    success: function (response) {
			      $('.container').html(response);
			    },
			  });
		 	}
		}, 2000);
	</script>
</body>
</html>
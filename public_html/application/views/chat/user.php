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
	<form method="post" action="<?php echo base_url(); ?>chat/kirim_pesan" enctype="multipart/form-data">
		<input type="hidden" name="tipe" value="user">
		<input type="hidden" name="user" value="1">
		<input type="text" name="msg">
		<input type="submit">
	</form>


	<script type="text/javascript">
	var myInterval = setInterval(function () {
		 	$.ajax({
			    url: "<?php echo base_url(); ?>chat/get_pesan",
			    type: "POST",
			    data: { 'user':'1' },
			    success: function (response) {
			      $('.contai
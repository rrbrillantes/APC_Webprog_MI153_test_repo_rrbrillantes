<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
<style>
	img {
		margin-right: 20px;
		margin-top: 20px;
	}
	body {
		background-image: url("<?php echo base_url('css/uploads/bg.jpg')?>");
		background-attachment: fixed;
		table border:0;
		align:center; 
		cellpadding:15;
		font-family: Garamond;
		font-size:20px;
	}
	
	.all {
		align: center;
		position: relative;
	}
</style>
<body>
<center>
<img class="all" src="<?php echo base_url('css/uploads/ALL.png')?>"  width ="500" height ="130"/>
<br>
<center>
<div id ="head">
	
	<a href="<?php echo site_url('form/Exercise6_Brillantes'); ?>" target="_self" align >
	<img src="HOME.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="<?php echo site_url('index.php/user_controller/personalinfo'); ?>" target="_self" align >
	<img src="BASIC.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="<?php echo site_url('index.php/user_controller/family'); ?>" target="_self" align >
	<img src="FAM.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="<?php echo site_url('index.php/user_controller/educ'); ?>" target="_self" align >
	<img src="EDUC.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="<?php echo site_url('index.php/user_controller/hobbies'); ?>" target="_self" align >
	<img src="HOBBIES.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="<?php echo site_url('index.php/user_controller/favorites'); ?>" target="_self" align >
	<img src="FAVE.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="<?php echo site_url('index.php/user_controller/trivias'); ?>" target="_self" align >
	<img src="TRIVIAS.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="<?php echo site_url('index.php/user_controller/contact'); ?>" target="_self" align >
	<img src="CONTACT.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="<?php echo site_url('index.php/user_controller/form'); ?>" target="_self" align >
	<img src="FORM.png" width ="80" height ="40"align ="center"/>
	</a> 

</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
	<style>

	p.intro {
		font-size: 20px;
		color: #000000;
		font-family: Goudy Old Style;
		text-align: Center; 
	}
	
	p.stylee {
		font-weight: bold;
	}
	
	
	
	footer {
		font-family: Times New Roman;
		font-size: 17px;
		font-color: white;
	}
	
	p.info {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	table {
		position: center;
	}
	img {
		margin-right: 20px;
		margin-top: 20px;
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
	
	<a href="<?php echo site_url('index.php/user_controller/Exercise5_Brillantes'); ?>" target="_self" align >
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


<center>
<p class="info"> Basic Information </p>
<table border="0" cellpadding="5" >

	<tr>
		<td>
		<img src="me.jpg" style="float:left" height=300;>
		</td>
		
		<td>
		<img src="me3.jpg" style="float:left" height=300;>
		</td>
		
		<td>
		<img src="me2.jpg" style="float:left" height=300;>
		</td>
	</tr>
</table>
<br>
<center>
<table bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%">

	<tr>
		<td>
		<p class="intro stylee">Fullname: </p>
		</td>
		
		<td>
		<p class="intro">Rachel Anne Rondena Brillantes</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Nickname:</p>
		</td>
		
		<td>
		<p class="intro">Rachel/Chel</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Birthdate:</p>
		</td>
		
		<td>
		<p class="intro">March 04, 1997</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Zodiac Sign:</p>
		</td>
		
		<td>
		<p class="intro">Pisces</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Birthplace:</p>
		</td>
		
		<td>
		<p class="intro">Taytay, Rizal</p>
		</td>
	</tr>
	
</table>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
	<a href="personalinfo.html"target="frameB"> -Basic Information-  </a>

	<a href="family.html"target="frameB"> Family-  </a>

	<a href="educ.html"target="frameB"> Education-  </a>
		
	<a href="hobbies.html"target="frameB"> Hobbies and Interests-  </a>

	<a href="favorites_chel.html"target="frameB"> Favorites-  </a>

	<a href="Trivias.html"target="frameB"> Trivias-  </a>

</footer>

</center>

</body>
</html>
	
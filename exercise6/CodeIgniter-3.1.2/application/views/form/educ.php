<!DOCTYPE html>
<html>
<head>
</head>

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
	

	
	table {
		margin-top:30px;
	}

	
	footer {
		font-family: Times New Roman;
		font-size: 17px;
		font-color: white;
	}
	
	p.edu {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	img {
		margin-right: 20px;
		margin-top: 20px;
	}
	body {
		background-image: url("bg.jpg");
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


<p class="edu">My Education</p>
<center>
<table align="middle" bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="50%" >
	
	
	<tr>
		<td>
		<p class="intro stylee">College: </p>
		</td>
		
		<td>
		<p class="intro">Asia Pacific College</p>
		<p class="intro">BS Information Technology - Mobile and Internet Technology</p>
		<p class="intro">(2013-present)</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">High School:</p>
		</td>
		
		<td>
		<p class="intro">Army's Angels Integrated School</p>
		<p class="intro">(2009-2013)</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro stylee">Elementary:</p>
		</td>
		
		<td>
		<p class="intro">Army's Angels Integrated School</p>
		<p class="intro">(2003-2009)</p>
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
	
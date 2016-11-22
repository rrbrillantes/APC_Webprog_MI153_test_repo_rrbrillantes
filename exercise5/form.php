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
	
	body {
		background-image: url("bg.jpg");
		background-attachment: fixed;
		align:center; 
		font-family: Garamond;
	}
	
	footer {
		font-family: Times New Roman;
		font-size: 17px;
		font-color: white;
	}

	p.hob {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	p.hob2 {
		font-size: 25px;
		font-family: Curlz MT;
		text-align:center;
		font-weight: bold;
	}

	p.con {
		font-size: 40px;
		color: BLACK;
		font-family: Gigi;
		text-align: center;
		font-weight: bold;
	}
	
	.error {
		color: #FF0000;
		font-size:20px;
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
<img class="all" src="ALL.png" width ="500" height ="130"/>
<br>
<center>
<div id ="head">
	
	<a href="Exercise5_Brillantes.php" target="_self" align >
	<img src="HOME.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="personalinfo.php" target="_self" align >
	<img src="BASIC.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="family.php" target="_self" align >
	<img src="FAM.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="educ.php" target="_self" align >
	<img src="EDUC.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="hobbies.php" target="_self" align >
	<img src="HOBBIES.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="favorites.php" target="_self" align >
	<img src="FAVE.png" width ="80" height ="40"align ="center"/>
	</a> 
	<a href="trivias.php" target="_self" align >
	<img src="TRIVIAS.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="contact.php" target="_self" align >
	<img src="CONTACT.png" width ="80" height ="40"align ="center"/>
	</a>
	<a href="form.php" target="_self" align >
	<img src="FORM.png" width ="80" height ="40"align ="center"/>
	</a> 
</div>

<center>
<p class="con">You can also leave a comment here in my page...</p>
</center>
<?php
include 'add_data.php';
?>

<table>
<?php
echo "<h2>Your Input:</h2>";
echo "Name: ", $name;
echo "<br>";
echo "Nickname: ",$nickname;
echo "<br>";
echo "Email Address: ", $email;
echo "<br>";
echo "Home Address: ", $home;
echo "<br>";
echo "Gender: ", $gender;
echo "<br>";
echo "Mobile Number: ", $number;
echo "<br>";
echo "Comments: ", $comment;
?>


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

</body>
</html>
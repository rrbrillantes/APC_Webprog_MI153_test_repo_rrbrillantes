<!DOCTYPE html>
<html>
<head>
</head>

	<style>

	p.intro {
		font-size: 25px;
		color: #000000;
		font-family: Garamond;
		
	}
	
	p.stylee {
		font-weight: bold;
	}
	
	body {
		background-image: url("bg.jpg");
		background-attachment: fixed;
		table border:0;
		align:center; 
		cellpadding:15;
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
		text-align:left;
		width: 50%;
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
<p class="info"> Know more about me! </p>
<table border="0" cellpadding="5" >

	<tr>
		<td>
		<p class="intro" id="trivia1"> What is my favorite color?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia1').innerHTML = 'I love the color blue and black'">Answer</button>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia2"> What is my favorite pet?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia2').innerHTML = 'I love dogs!!!'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia3"> What is my favorite song?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia3').innerHTML = 'Fearless by Taylor Swift'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia4"> Who is my favorite international singer?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia4').innerHTML = 'Taylor Swift! Swiftie here..'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia5"> What is my favorite song?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia5').innerHTML = 'Fearless by Taylor Swift'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia6"> My dream course is _________</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia6').innerHTML = 'Music Production!'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia7"> The first country I want to visit is ___________</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia7').innerHTML = 'South Korea! I am a Kpop fan just so you know :)'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia8"> I want to learn how to play the ___________</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia8').innerHTML = 'Guitar and Piano'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia9"> I am afraid of _________</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia9').innerHTML = 'The ocean'">Answer</button>
		</td>
	</tr>
	
	<tr>
		<td>
		<p class="intro" id="trivia10"> What is my favorite song?</p>
		</td>
		<td>
		<button type="button" onclick="document.getElementById('trivia10').innerHTML = 'Fearless by Taylor Swift'">Answer</button>
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
	
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
</style>
<body>

<center>
<p class="con">You can reach me through the following sites</p>

<table class="t1" align="middle" bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%" style="float:center">
	<tr>
		<td> 
		<p class="intro stylee">Facebook</p>
		</td>
	
		<td>
		
		<center><p class="intro stylee"><a href = "https://www.facebook.com/momoxielle" target="_blank"> <img src="fb.png" height="80" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Twitter</p>
		</td>
		
		<td> 
		<center><p class="intro stylee"><a href = "https://www.twitter.com/_raimssi" target="_blank"> <img src="twitter.png" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Instagram</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><a href = "https://www.instagram.com/_raimssi" target="_blank"> <img src="insta.png" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Youtube</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><a href = "https://www.youtube.com/channel/UC3jO-jb9FzhcM21GJ-AY4aA" target="_blank"> <img class="net" src="yt.png" height="50" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Snapchat</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><img class="net" src="snapchat.png" height="50" align="center"></a><figcaption>@momoxielle</figcaption></center></p>
		</td>
	</tr>
	
	<tr>
		<td> 
		<p class="intro stylee">Gmail</p>
		</td>
		
		<td>
		<center><p class="intro stylee"><img class="net" src="gmail.png" height="50" align="center"></a><figcaption>Momoxielle@gmail.com</figcaption></center></p>
		</td>
	</tr>
</table>

<center>
<p class="con">You can also leave a comment here in my page...</p>
</center>



<form action=""method="post">
<table border="2px">
	<tr> 
		<td> 
		<label>Complete Name:</label>
		<input type="text"name="name"/><br>
		<label>Nickname:</label>
		<input type="text"name="nickname"/><br><br>
		
		<center>
		<input type="submit"name="btn_submit"value="Submit">
		</center>
 
		</td>
	</tr>
</table>
</form> 

		<i><label> Your Input</label> 
		<?php 
			if(isset($_POST['btn_submit'])) 
			{ 
			$nickname=$_POST['name'];
			$name=$_POST['nickname'];
		
			
			echo $name;
			echo $nickname;
			}
		?> </i>





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
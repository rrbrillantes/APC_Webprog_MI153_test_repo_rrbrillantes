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
	
	<a href="form.php" target="_self" align >
	<img src="FORM.png" width ="80" height ="40"align ="center"/>
	</a> 
	
	<a href="contact.php" target="_self" align >
	<img src="CONTACT.png" width ="80" height ="40"align ="center"/>
	</a> 
	
	<a href="trivias.php" target="_self" align >
	<img src="TRIVIAS.png" width ="80" height ="40"align ="center"/>
	</a>
	
	<a href="favorites.php" target="_self" align >
	<img src="FAVE.png" width ="80" height ="40"align ="center"/>
	</a> 
	
	
	<a href="hobbies.php" target="_self" align >
	<img src="HOBBIES.png" width ="80" height ="40"align ="center"/></a> 

	<a href="educ.php" target="_self" align >
	<img src="EDUC.png" width ="80" height ="40"align ="center"/></a> 

	<a href="family.php" target="_self" align >
	<img src="FAM.png" width ="80" height ="40"align ="center"/>
	</a>
	
	<a href="personalinfo.php" target="_self" align >
	<img src="BASIC.png" width ="80" height ="40"align ="center"/>
	</a>
	
	<a href="Exercise5_Brillantes.php" target="_self" align >
	<img src="HOME.png" width ="80" height ="40"align ="center"/>
	</a> 
	
	
</div>

<center>
<p class="con">You can also leave a comment here in my page...</p>
</center>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $numberErr = $homeErr = "";
$name = $nickname = $email = $gender = $comment = $number = $home = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  $name = "";
    }
  }
  
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nicknameErr = "Only letters and white space allowed"; 
	  $nickname = "";
    }
  }

  if (!empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
   // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	  $email = "";
    }
  }	else {
		$emailErr = "Email is required";
		$email = "";
  }
  

  
	if (!empty($_POST["number"])) {
		$number = test_input($_POST["number"]);
		if (strlen($number) < 11) {
		$numberErr = "invalid mobile number";
		$number = "";
			if (!$number[0]) {
				$numberErr = "invalid format";
				$number = "";
			}
		}
	} else{
		$numberErr = "Number is required";
	}
    
  if (empty($_POST["home address"])) {
    $home = "";
  } else {
    $home = test_input($_POST["home address"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<table BORDER="1" BORDERCOLOR="BLACK" >
	<tr> 
		<td> 
			<label>Name:</label>
		</td>
		<td>
			<input type="text" name="name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
		</td>
	</tr>
	
	<tr>
		<td>
			<label>Nickname:</label>
		</td>
		<td>
			<input type="text" name="nickname" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?> </span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label>E-mail:</label>
		</td>
		<td>
			<input type="text" name="email" value="<?php echo $email;?>">
			<span class="error">*<?php echo $emailErr;?></span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label>Home Address:</label>
		</td>
		<td>
			<input type="text" name="home" value="<?php echo $home;?>">
			<span class="error"><?php echo $homeErr;?></span>
		</td>
	</tr>

	<tr>
		<td>
			<label>Gender:</label>
		</td>
		<td>
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">*<?php echo $genderErr;?></span>
		</td>
	</tr>
	
	<tr>
		<td>
			<label>Mobile Number:</label>
		</td>
		<td>
			<input type="text" name="number" size="11"
			<?php echo $number;?>">
			<span class="error">*<?php echo $numberErr;?></span>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label>Comment:</label>
		</td>
		<td>
			<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
		</td>
	</tr>	

</table>	
<br>	
		<input type="submit" name="submit" value="Submit">
</form>


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
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
	
	#btn {
		font-family: Garamond;
		font-size:17px;
		background-color: white;
	}
</style>
<body>

<center>

<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $home = $_POST['home'];
$gender = $_POST['gender']; 
 $number = $_POST['number'];
 $comment = $_POST['comment']; 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO users(name,nickname,email,home,gender,number,comment) VALUES('$name','$nickname','$email','$home','$gender','$number','$comment')";
 mysqli_query($link, $sql_query);
        
        // sql query for inserting data into database
 }
?>
<center>

<div id="header">
 <div id="content">
    <label>Please fill out the form.</label>
    </div>
</div>
<div id="body">
	
<?php
		// define variables and set to empty values
		$nameErr = $nicknameErr = $emailErr = $genderErr =$numberErr = "";
		$name = $nickname = $email = $home = $gender = $number = $comment = "";
		
		
		
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

			
			
			if(empty($_POST["nickname"])){
		  		$nicknameErr = "Nickname is required";
			}else{
		  		$nickname = test_input($_POST["nickname"]);
		  		if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
				$nicknameErr = "Only letters and white space allowed";
				$nickname = "";
				}
			}
		  
		  
		  
			if (empty($_POST["email"])) {
			$emailErr = "Email is required";
		  	} else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  	$emailErr = "Invalid email format";
			  	$email = "";
				}
		  	}

			
			
			if(empty($_POST["home"])){
			  	$home = "";
			}else{
			  	$home = test_input($_POST["home"]);
			}

			

		  	if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
		  	} else {
				$gender = test_input($_POST["gender"]);
		  	}
			
			

			if (empty($_POST["number"])) {
				$numberErr = "Mobile number is required";
		  	} else {
				$number = test_input($_POST["number"]);
				if(!preg_match("/^[0-9]*$/",$number)){
					$numberErr = "Only numbers are allowed";
					$number = "";
				}
		  	}
			
			
			
			if (empty($_POST["comment"])) {
				$comment = "";
		  	} else {
				$comment = test_input($_POST["comment"]);
		  	}	
		}

		
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
			}
	?>
	
	
			<p><span class="error">* required field.
			<br>*Don't forget to save and cick the Display data below</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
   
    </tr>
    <tr>
		<td>
			<label>Name:</label>
		</td>
		<td><input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			<span class="error">* <?php echo $nameErr;?></span>
		</td>
    </tr>
    <tr>
		<td>
			<label>Nickname:</label>
		</td>
    <td><input type="text" name="nickname" placeholder="Nick name" value="<?php echo $nickname;?>">
			<span class="error">* <?php echo $nicknameErr;?></span></td>
    </tr>
    <tr>
		<td>
			<label>Email:</label>
		</td>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span></td>
    </tr>
	<tr>
		<td>
			<label>Home:</label>
		</td>
		<td><textarea name="home" placeholder ="home address" rows ="2" cols="30"><?php echo $home;?></textarea></span></td>
    </tr>

	<tr>
		<td>
			<label>Gender:</label>
		</td>
		<td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">* <?php echo $genderErr;?></span>
    </tr>

	<tr>
		<td>
			<label>Mobile Number:</label>
		</td>
		<td><input type="text" name="number" placeholder="Cellphone Number" value="<?php echo $number;?>">
			<span class="error">* <?php echo $numberErr;?></span></td>
    </tr>

	<tr>
		<td>
			<label>Comment:</label>
		</td>
		<td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea></span></td>
    </tr>

    </table>
    </form>
    </div>
	<button id="btn" type="submit" name="btn-save" onclick="location.href='index.php';"><strong>SAVE</strong></button>
	<button id="btn" type="button" onclick="location.href='index.php';">DISPLAY DATA</button>
</div>

</center>
</body>
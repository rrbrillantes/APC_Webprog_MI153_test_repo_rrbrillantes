<!DOCTYPE html>
<html>
<head>
</head>

	<style>

	
	footer {
		font-family: Times New Roman;
		font-size: 17px;
		font-color: white;
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
	
	#eto{
	width: 1100px;
	height: 1000px;
	background: rgba(0,0,0,0.1);
	padding: 5px;
	color: black;
	margin: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	font-family:comic sans ms;
	font-size:25px;
	vertical-align:baseline;
	}

#hey {
	vertical-align:baseline;
	padding-left:80px;
	font-family:comic sans ms;
	font-size:25px;
	text-align:center;
	}
</style>

<center>
<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
	$name = $_POST['name'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$home = $_POST['home'];
	$gender = $_POST['gender']; 
	$number = $_POST['number'];
	$comment = $_POST['comment']; 
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET name='$name', nickname='$nickname',email='$email',home='$home',gender='$gender',number='$number',comment='$comment' WHERE user_id=".$_GET['edit_id'];   
 // sql query for update data into database 
 
// sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  window.location.href='index.php';
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
?>
</head>
</center>
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
<div id="eto">
<h1>Form</h1>

<div id="header">
 <div id="content">
    <label>Please fill out the form.</label>
    </div>
	<div id="body">		
	<div id="content">
    <form method="post">
    <table align="center">
   <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required/></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickkame" value="<?php echo $fetched_row['nickname'];?>"required/></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email'];?>" required></td>
    </tr>
	<tr>
    <td><textarea name="home" placeholder ="home address" rows ="3" cols="30"><?php echo $fetched_row['home'];?></textarea></td>
    </tr>
	<tr>
    <td><input type="radio" name="gender"  <?php if (isset($gender) && $gender=="female") echo $fetched_row['gender']; ?> value="female">Female
	<input type="radio" name="gender"  <?php if (isset($gender) && $gender=="male") echo $fetched_row['gender']; ?> value="male">Male
	</td>
    </tr>
	<tr>
    <td><input type="text" name="number" placeholder="Cellphone Number" value="<?php echo $fetched_row['number'];?>"required></td>
    </tr>
	<tr>
    <td><textarea name="comment" placeholder="Comment" rows="5" cols="40"><?php echo $fetched_row['comment'];?></textarea></td>
    </tr>
	<tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
	 </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
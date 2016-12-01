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
	
	#btn {
		font-family: Garamond;
		font-size:20px;
	}
	
	.err {
		font-weight: bold;
		color: rgb(255,0,0);
	}
	
</style>
<body>
<center>

<p class="con">You can also leave a comment here in my page...</p>
<p id="form">Just enter the following details: </p>
<p><span class="error"><u>* required field.</u></p>

<?php echo validation_errors(); ?>
 <?php echo form_open('form/create'); ?>    
    
<table BORDER="1" BORDERCOLOR="BLACK" cellpadding="5px">
	<tr> 
		<td>
			<label for="name">Name:</label>
		</td>
		<td>
			<input type="text" name="name" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
	
	<tr>
		<td>
			<label for="nickname">Nickname:</label>
		</td>
		<td>
			<input type="text" name="nickname" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="email">E-mail:</label>
		</td>
		<td>
			<input type="text" name="email" size="30" />
			<span class="error">*</span>
		</td>
	</tr>
		
	<tr>
		<td>
			<label for="home">Home Address:</label>
		</td>
		<td>
			<textarea name="home" rows="5" cols="30"></textarea>
		</td>
	</tr>

	<tr>
		<td>
			<label for="gender">Gender:</label>
		</td>
		<td>
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
			<input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
			<span class="error">*</span>
		</td>
	</tr>

	<tr>
		<td>
			<label for="number">Mobile Number:</label>
		</td>
		<td>
			<input type="text" name="number" size="30" />
			<span class="error">*</span>
		</td>
	</tr>	
	
	<tr>
		<td>
			<label for="comment">Comment:</label>
		</td>
		<td>
			<textarea name="comment" rows="5" size="30"></textarea>
		</td>
	</tr>
</table>
<br>	
		<input id="btn" type="submit" name="btn-save" onclick="location.href='form';">
</form>
</center>
</body>
</html>
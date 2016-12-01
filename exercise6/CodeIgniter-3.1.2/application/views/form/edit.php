<!DOCTYPE html> 
<html lang = "en">
<head> 
      <meta charset = "utf-8"> 
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css"/>
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
		background-image: url("/css/uploads/bg.jpg");
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
		background-image: url("/css/uploads/bg.jpg");
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
<p class="con">Feel free to edit your details</p>

<?php echo validation_errors(); ?>
 
<?php echo form_open('form/edit/'.$form_item['user_id']); ?>
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="70" value="<?php echo $form_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="nickname">Nickname</label></td>
			<td><input type="input" name="nickname" size="70" value="<?php echo $form_item['nickname'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="email">Email</label></td>
			<td><input type="input" name="email" size="70" value="<?php echo $form_item['email'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="home">Home</label></td>
			<td><textarea name="home" rows="5" cols="30"><?php echo $form_item['home'] ?></textarea></td>
		</tr>
		<tr>
            <td><label for="gender">Gender</label></td>
			<td><input type="radio" name="gender" value="Female" <?php echo ($form_item['gender'])?'checked':'' ?>>Female
			<input type="radio" name="gender" value="Male" <?php echo ($form_item['gender'])?'checked':'' ?>>Male
			</td>

		</tr>
		
		<tr>
            <td><label for="number">Number</label></td>
			<td><input type="input" name="number" size="70" value="<?php echo $form_item['number'] ?>" /></td>
		</tr>
		<tr>
            <td><label for="comment">Comment</label></td>
            <td><textarea name="comment" rows="10" cols="40"><?php echo $form_item['comment'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit form item" /></td>
        </tr>
    </table>
</form>
</body>
</html>
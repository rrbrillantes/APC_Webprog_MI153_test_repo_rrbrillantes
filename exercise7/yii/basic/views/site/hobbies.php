<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php

/* @var $this yii\web\View */

$this->title = 'All About Me';
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
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

</style>
<body>

<center>

<p class="hob"> What I like to do when i'm bored... </p>
<center>
<table border="0" cellpadding="5" >

	<tr>
		<td>
	 	<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/eat1.gif";?>" height=200; >
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/eat2.gif";?>" height=200;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/eat3.gif";?>" height=200; width=240;>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
		<p class="hob2">1. EATING (Yes. I do eat when i'm bored)</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/w1.gif";?>" style="float:left" height=170; width=240;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/w2.gif";?>" style="float:left" height=170; width=240;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/w3.gif";?>" style="float:left" height=170; width=240;>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
		<p class="hob2">2. WATCHING KOREAN DRAMAs!</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/s1.gif";?>" height=170; width=240; >
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/s3.gif";?>" height=170; width=240;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/s2.gif";?>" height=170; width=240;>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
		<p class="hob2">3. WRITING SONGS!</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/d1.gif";?>" height=150; width=240; >
		</td>
		
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/d2.gif";?>" height=150; width=240;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/d3.gif";?>" height=150; width=240;>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
		<p class="hob2">4. Trying to dance (but i'm not good at it, okay?)</p>
		</td>
	</tr>
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/f1.gif";?>" height=150; width=240; >
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/f3.gif";?>" height=150; width=240;>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/f2.gif";?>" height=150; width=240;>
		</td>
	</tr>
	
	<tr>
		<td colspan="3">
		<p class="hob2">5. Hanging out with friends</p>
		</td>
	</tr>
</table>

</body>
</html>
	
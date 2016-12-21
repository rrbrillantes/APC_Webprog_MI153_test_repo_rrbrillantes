<!DOCTYPE html>
<html>
<head>
</head>
<?php

/* @var $this yii\web\View */

$this->title = 'Favorites';
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

	p.double {
		border-style: double;
		width: 700px;
		height: 60px;
		font-size: 40px;
		font-family: Curlz MT;
		font-weight: bold;
	}
	
	figcaption {
		font-size: 25px;
		font-family: Garamond;
		
	}
	img {
		margin-right: 20px;
		margin-top: 20px;
	}

	
</style>
<body>

<center>

<p class="hob"> Let's talk about my favorites! </p>
<center>

<p class="double">Food!</p>
<table border="0" cellpadding="5" >
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/pizza.gif";?>" height=100; width=140; ><figcaption>Pizza!!</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/chicken.gif";?>" height=100; width=140;><figcaption>Fried Chicken!!</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/fries.gif";?>" height=100; width=140;><figcaption>French Fries!!</figcaption></center>
		</td>
	</tr>
</table>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/bacon.gif";?>" height=100; width=140;><figcaption>Bacon!!!</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/choco.gif";?>" height=100; width=140;><figcaption>Chocolate!!</figcaption></center>
		</td>
	</tr>
</table>

<p class="double">Groups</p>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/exo.gif";?>" height=100; width=180; ><figcaption>EXO</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/bts.gif";?>" height=100; width=180;><figcaption>Bangtan Boys</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/infinite.gif";?>" height=100; width=180;><figcaption>Infinite</figcaption></center>
		</td>
	</tr>
</table>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/snsd.gif";?>" height=100; width=180; ><figcaption>SNSD</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/gfriend.gif";?>" height=100; width=180;><figcaption>Gfriend</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/apink.gif";?>" height=100; width=180;><figcaption>Apink</figcaption></center>
		</td>
	</tr>
</table>


<p class="double">Korean Dramas</p>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/sgg.gif";?>" height=150; width=280; >
		</td>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/sgg2.gif";?>" height=150; width=280;>
		</td>
	</tr>
</table>
<center><figcaption> - SASSY GO GO</figcaption></center>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/w4.gif";?>" height=150; width=280; >
		</td>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/w5.gif";?>" height=150; width=280;>
		</td>
	</tr>
</table>
<center><figcaption> - W THE TWO WORLDS</figcaption></center>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/DOTS1.gif";?>" height=150; width=280; >
		</td>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/DOTS2.gif";?>" height=150; width=280;>
		</td>
	</tr>
</table>
<center><figcaption> - DESCENDANTS OF THE SUN</figcaption></center>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/GHOST1.gif";?>" height=150; width=280; >
		</td>
		<td>
		<img src="<?php echo Yii::$app->request->baseUrl . "/Images/GHOST2.gif";?>" height=150; width=280;>
		</td>
	</tr>
</table>
<center><figcaption> - LET'S FIGHT GHOST!</figcaption></center>

<p class="double">BANDS (Foreign & Local)</p>

<table border="0" cellpadding="5" >
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/paramore.gif";?>" height=150; width=280;><figcaption>Paramore</figcaption></center>
		</td>
	
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/blg.gif";?>" height=150; width=280;><figcaption>Boys Like Girls</figcaption></center>
		</td>
	</tr>
	
	<tr>
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/ss.jpg";?>" height=180; width=280;><figcaption>Silent Sanctuary</figcaption></center>
		</td>
		
		<td>
		<center><img src="<?php echo Yii::$app->request->baseUrl . "/Images/pne.jpg";?>" height=180; width=280;><figcaption>Parokya ni Edgar</figcaption></center>
		</td>
	</tr>
	</tr>
</table>

</body>
</html>
	
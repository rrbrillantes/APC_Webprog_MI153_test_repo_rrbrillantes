<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
</head>

<style type="text/css">


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

</style>
<body>

<center>

<p class="con">You can reach me through the following sites</p>

<br>
<br>
<table class="t1" align="middle" bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%" style="float:center">
    <tr>
        <td> 
        <p class="intro stylee">Facebook</p>
        </td>
    
        <td>
        
        <center><p class="intro stylee"><a href = "https://www.facebook.com/momoxielle" target="_blank"> <img src="<?php echo Yii::$app->request->baseUrl . "/Images/fb.png";?>" height="80" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
        </td>
    </tr>
    
    <tr>
        <td> 
        <p class="intro stylee">Twitter</p>
        </td>
        
        <td> 
        <center><p class="intro stylee"><a href = "https://www.twitter.com/_raimssi" target="_blank"> <img src="<?php echo Yii::$app->request->baseUrl . "/Images/twitter.png";?>" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
        </td>
    </tr>
    
    <tr>
        <td> 
        <p class="intro stylee">Instagram</p>
        </td>
        
        <td>
        <center><p class="intro stylee"><a href = "https://www.instagram.com/_raimssi" target="_blank"> <img src="<?php echo Yii::$app->request->baseUrl . "/Images/insta.png";?>" height="80" align="center"></a><figcaption>@_raimssi</figcaption></center></p>
        </td>
    </tr>
    
    <tr>
        <td> 
        <p class="intro stylee">Youtube</p>
        </td>
        
        <td>
        <center><p class="intro stylee"><a href = "https://www.youtube.com/channel/UC3jO-jb9FzhcM21GJ-AY4aA" target="_blank"> <img src="<?php echo Yii::$app->request->baseUrl . "/Images/yt.png";?>" height="50" align="center"></a><figcaption>Rachel Anne Brillantes</figcaption></center></p>
        </td>
    </tr>
    
    <tr>
        <td> 
        <p class="intro stylee">Snapchat</p>
        </td>
        
        <td>
        <center><p class="intro stylee"><img class="net" src="<?php echo Yii::$app->request->baseUrl . "/Images/snapchat.png";?>" height="50" align="center"></a><figcaption>@momoxielle</figcaption></center></p>
        </td>
    </tr>
    
    <tr>
        <td> 
        <p class="intro stylee">Gmail</p>
        </td>
        
        <td>
        <center><p class="intro stylee"><img class="net" <img src="<?php echo Yii::$app->request->baseUrl . "/Images/gmail.png";?>" height="50" align="center"></a><figcaption>Momoxielle@gmail.com</figcaption></center></p>
        </td>
    </tr>
</table>
</center>
</body>
</html>

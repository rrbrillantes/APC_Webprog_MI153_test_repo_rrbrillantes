<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<body>
<center>
<p class="info"> Basic Information </p>
<table border="0" cellpadding="5" >

    <tr>
        
        <td>
        <img border="0" src=<?php echo Yii::$app->request->baseUrl . "/Images/me3.jpg";?> style="float:left" height=300>
        </td>
        
        <td>
        <img border="0" src=<?php echo Yii::$app->request->baseUrl . "/Images/me2.jpg";?> style="float:left" height=300>
        </td>
    </tr>
</table>
<br>
<br>

<center>
<table bgcolor="#fde9ec" BORDER="1" BORDERCOLOR="BLACK" cellpadding="4" width="30%">

    <tr>
        <td>
        <p class="intro stylee">Fullname: </p>
        </td>
        
        <td>
        <p class="intro">Rachel Anne Rondena Brillantes</p>
        </td>
    </tr>
    
    <tr>
        <td>
        <p class="intro stylee">Nickname:</p>
        </td>
        
        <td>
        <p class="intro">Rachel/Chel</p>
        </td>
    </tr>
    
    <tr>
        <td>
        <p class="intro stylee">Birthdate:</p>
        </td>
        
        <td>
        <p class="intro">March 04, 1997</p>
        </td>
    </tr>
    
    <tr>
        <td>
        <p class="intro stylee">Zodiac Sign:</p>
        </td>
        
        <td>
        <p class="intro">Pisces</p>
        </td>
    </tr>
    
    <tr>
        <td>
        <p class="intro stylee">Birthplace:</p>
        </td>
        
        <td>
        <p class="intro">Taytay, Rizal</p>
        </td>
    </tr>
    
</table>

</body>
</html>
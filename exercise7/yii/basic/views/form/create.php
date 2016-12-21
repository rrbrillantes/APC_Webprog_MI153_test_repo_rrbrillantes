<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form */

$this->title = 'Leave a comment';
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">

    .form-create {
         width: 40%;
    }
    
    p.con {
        font-size: 40px;
        color: BLACK;
        font-family: Gigi;
        text-align: center;
        font-weight: bold;
    }
</style>
<center>
<br>
<br>

<div class="form-create">

    <p class="con"><?= Html::encode($this->title) ?></p>
<br>
<br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

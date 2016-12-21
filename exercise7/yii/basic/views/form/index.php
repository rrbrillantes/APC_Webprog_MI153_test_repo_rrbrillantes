<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comment Section';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    
    p.con {
        font-size: 40px;
        color: BLACK;
        font-family: Gigi;
        text-align: center;
        font-weight: bold;
    }
</style>
<center>
<div class="form-index">

    <p class="con"><?= Html::encode($this->title) ?></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Insert users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'name',
            'nickname',
            'email:email',
            'home',
         'gender',
          'number',
         'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

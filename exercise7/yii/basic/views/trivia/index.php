<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TriviaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trivias';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">

    .trivia-index {
         width: 70%;
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
<div class="trivia-index">
    <p class="con"><?= Html::encode($this->title) ?></p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Trivia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php
            if (Yii::$app->user->isGuest) {
                
            } elseif(Yii::$app->user->identity->username) {
                echo Html::a('Create a Trivia', ['create'], ['class' => 'btn btn-success']); 
            }
            ?>
    </p>
    <?php Pjax::begin(); ?>   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'questions',

            ['class' => 'yii\grid\ActionColumn','template'=>'{view}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

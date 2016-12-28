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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  $(document).ready(function()
  {
      $("#show").click(function(){
         $('answer').toggle();
      });
  });
  function reload() {
      location.reload();
  }
</script>

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
    
    p.triv {
        font-size: 20px;
        color: #000000;
        font-family: Goudy Old Style;
    }

</style>
<center>
<br>
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
</div>
</center>

  <?php foreach ($trivia as $trivia): ?>

      <p class='triv'><strong><?= Html::encode("{$trivia->questions}") ?>:</strong>
      <br>
          <answer style="display:none"> -- &nbsp;<?=$trivia->answer ?></answer>

      </p>
  <?php endforeach; ?>

<br>
<br>

  <button id="show" class="btn btn-success">Show all answers</button>
  <br>
  <br>

  <button class="btn btn-success" onclick="reload()">RANDOMIZE !</button>


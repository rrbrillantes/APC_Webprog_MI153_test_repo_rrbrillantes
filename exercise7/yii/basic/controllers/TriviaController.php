<?php

namespace app\controllers;

use Yii;
use app\models\Trivia;
use app\models\TriviaSearch;
use yii\db\Expression;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
/**
 * TriviaController implements the CRUD actions for Trivia model.
 */
class TriviaController extends Controller
{

    /**
     * Lists all Trivia models.
     * @return mixed
     */
    public function actionIndex()
    {
      $query = Trivia::find()
        ->orderBy(new Expression('rand()'))
        ->limit(5)
        ->all();

          return $this->render('index', [
        'trivia' => $query,
          ]);

          $this->render('index', array('dataProvider' => $dataProvider));
    }

    /**
     * Displays a single Trivia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Trivia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Trivia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Trivia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Trivia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
}

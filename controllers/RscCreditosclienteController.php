<?php

namespace app\controllers;

use Yii;
use app\models\RscCreditoscliente;
use app\models\RscCreditosclienteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RscCreditosclienteController implements the CRUD actions for RscCreditoscliente model.
 */
class RscCreditosclienteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all RscCreditoscliente models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RscCreditosclienteSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RscCreditoscliente model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RscCreditoscliente model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RscCreditoscliente();

        if ($model->load(Yii::$app->request->post()) ) {
		$model->activo = 0;
		$model->created_by = Yii::$app->user->id;
		$model->modified_by = Yii::$app->user->id;
		$model->ultima_modificacion=date('Y-m-d H-m-s');

		$model->save();
		return $this->redirect(['view', 'id' => $model->idcliente]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RscCreditoscliente model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

	if ($model->load(Yii::$app->request->post()) ) {
		$model->ultima_modificacion=date('Y-m-d H-m-s');                
		$model->modified_by=Yii::$app->user->id;
		$model->save();
            return $this->redirect(['view', 'id' => $model->idcliente]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RscCreditoscliente model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RscCreditoscliente model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RscCreditoscliente the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RscCreditoscliente::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}

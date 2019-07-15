<?php

namespace app\controllers;

use app\libutils\CargaCatalogos;
use app\libutils\DateUtils;
use DateTime;
use Yii;
use app\models\RscPedidoCabecera;
use app\models\RscPedidoCabeceraSearch;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RscPedidoCabeceraController implements the CRUD actions for RscPedidoCabecera model.
 */
class RscPedidoCabeceraController extends Controller
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
     * Lists all RscPedidoCabecera models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RscPedidoCabeceraSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'clients' => CargaCatalogos::getClients(),
            'status' => CargaCatalogos::getStatus()
        ]);
    }

    /**
     * Displays a single RscPedidoCabecera model.
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
     * Creates a new RscPedidoCabecera model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RscPedidoCabecera();

        if ($model->load(Yii::$app->request->post())) {
            $model->idcredito = $model->idcliente;
            $model->created_by = Yii::$app->user->id;
            $model->modified_by = $model->created_by;
            $this->setDates($model);

            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
            else
                die("No data saved");
        }

        return $this->render('create', [
            'model' => $model,
            'catalogs' => $this->getCatalogs()
        ]);
    }

    /**
     * Updates an existing RscPedidoCabecera model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->idcredito = $model->idcliente;
            $model->modified_by = Yii::$app->user->id;
            $model->ultima_modificacion = date('Y-m-d');
            $this->setDates($model);

            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
            else
                die("No data saved");
        }

        $model->fechaentrega = DateUtils::toIsoDate($model->fechaentrega);
        $model->fechapago = DateUtils::toIsoDate($model->fechapago);

        return $this->render('update', [
            'model' => $model,
            'catalogs' => $this->getCatalogs()
        ]);
    }

    /**
     * Deletes an existing RscPedidoCabecera model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->activo = CargaCatalogos::INACTIVE;
        $model->save();

        Yii::$app->session->setFlash('message', "Se ha eliminado el pedido $id");

        return $this->redirect(['index']);
    }

    public function actionAjax() {
        if(($id = (Yii::$app->request->post('id'))) !== NULL) {
            $response = [
                "success" => TRUE,
                "message" => "Operación exitosa",
                "data" => CargaCatalogos::getCreditByClientId($id)
            ];
        } else {
            $response = [
                "success" => FALSE,
                "message" => "Id no válido",
                "data" => NULL
            ];
        }

        return Json::encode($response);
    }

    /**
     * Finds the RscPedidoCabecera model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RscPedidoCabecera the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RscPedidoCabecera::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    private function getCatalogs()
    {
        return [
            'client' => CargaCatalogos::getClients(),
            'status' => CargaCatalogos::getStatus(),
            'priority' => CargaCatalogos::getPriorities(),
            'iva' => CargaCatalogos::getIva(),
            'credit' => CargaCatalogos::getCredits(),
            'send_type' => CargaCatalogos::getSendType(),
            'activo' => [0 => 0, 1 => 1]
        ];
    }

    private function setDates($model) {
        if($model !== NULL) {
            $model->fechapago = DateUtils::toDate($model->fechapago);
            $model->fechaentrega = DateUtils::toDate($model->fechaentrega);
        }
    }
}
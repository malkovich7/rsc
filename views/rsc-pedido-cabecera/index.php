<?php

use app\assets\OrderAsset;
use app\libutils\DateUtils;
use mdm\admin\components\Helper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscPedidoCabeceraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = $this->title;
OrderAsset::register($this);
?>
<?php if (Yii::$app->session->has('message')): ?>
    <div class="alert alert-success" role="alert">
        <?= Yii::$app->session->getFlash('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="rsc-pedido-cabecera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (Yii::$app->user->can('crear-pedido')): ?>
            <?= Html::a('Nuevo Pedido', ['create'], ['class' => 'btn btn-success']); ?>
        <?php endif; ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions' => function ($model) {
            if ($model->id > 3) {
                return ['class' => 'alert alert-danger'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [
                'attribute' => 'idcliente',
                'value' => function ($model) {
                    return $model->cliente->nombre . ' ' . $model->cliente->apellidos;
                },
                'filter' => $clients,
                'filterInputOptions' => ['prompt' => 'Cliente', 'class' => 'form-control']
            ],
            [
                'attribute' => 'idestatus',
                'value' => 'estatus.nombreestatus',
                'filter' => $status,
                'filterInputOptions' => ['prompt' => 'Estatus', 'class' => 'form-control']
            ],
            //'idprioridad',
            //'monto',
            //'montoiva',
            'montoTotal',
            //'idiva',
            //'idcredito',
            //'fechaelaboracion',
            [
                    'attribute' => 'fechaentrega',
                'value' => function($model) {
                    return DateUtils::toIsoDate($model->fechaentrega);
                }
            ],
            [
                'attribute' => 'fechapago',
                'value' => function($model) {
                    return DateUtils::toIsoDate($model->fechapago);
                }
            ],
            //'factura',
            //'fechaelaboracionfactura',
            //'notaspedido:ntext',
            //'idtipoenvio',
            //'trackingchofer',
            //'activo',
            //'created_by',
            //'modified_by',
            //'ultima_modificacion',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => Helper::filterActionColumn('{view}{delete}{update}'),
                'buttons' => [
                    'view' => function ($id) {
                        return Html::a(
                            '<span class="far fa-eye"></span>',
                            $id,
                            [
                                'class' => 'action-link',
                                'title' => 'Detalles',
                                'data-pjax' => '0',
                            ]
                        );
                    },
                    'update' => function ($id) {
                        return Html::a(
                            '<span class="fas fa-pencil-alt"></span>',
                            $id,
                            [
                                'class' => 'action-link',
                                'title' => 'Actualizar',
                                'data-pjax' => '0',
                            ]
                        );
                    },
                    'delete' => function ($id) {
                        return Html::a(
                            '<span class="fas fa-trash"></span>',
                            $id,
                            [
                                'class' => 'action-link',
                                'title' => 'Eliminar',
                                'data-pjax' => '0',
                            ]
                        );
                    }
                ]
            ],
        ],
    ]); ?>


</div>

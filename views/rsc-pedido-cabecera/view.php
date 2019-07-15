<?php

use app\libutils\CargaCatalogos;
use app\libutils\DateUtils;
use app\models\User;
use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="rsc-pedido-cabecera-view">

    <h1>Pedido <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar el pedido?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'idcliente',
                'value' => function ($model) {
                    return $model->cliente->nombre . ' ' . $model->cliente->apellidos;
                }
            ],
            [
                'attribute' => 'idestatus',
                'value' => function ($model) {
                    return $model->estatus->nombreestatus;
                }
            ],
            [
                'attribute' => 'idprioridad',
                'value' => function ($model) {
                    return $model->prioridad->nombreprioridad;
                }
            ],
            'monto',
            'montoiva',
            [
                'attribute' => 'idiva',
                'value' => function ($model) {
                    return $model->iva->impuesto;
                }
            ],
            [
                'attribute' => 'fechaelaboracion',
                'value' => function ($model) {
                    return DateUtils::toFullIsoDate($model->fechaelaboracion);
                }
            ],
            [
                'attribute' => 'fechaentrega',
                'value' => function ($model) {
                    return DateUtils::toIsoDate($model->fechaentrega);
                }
            ],
            [
                'attribute' => 'fechapago',
                'value' => function ($model) {
                    return DateUtils::toIsoDate($model->fechapago);
                }
            ],
            'factura',
            'fechaelaboracionfactura',
            'notaspedido:ntext',
            'idtipoenvio',
            'trackingchofer',
            [
                'attribute' => 'activo',
                'value' => function ($model) {
                    return CargaCatalogos::$status[$model->activo];
                }
            ],
            [
                'attribute' => 'created_by',
                'value' => function ($model) {
                    return User::findOne($model->created_by)->username;
                }
            ],
            [
                'attribute' => 'modified_by',
                'value' => function ($model) {
                    return User::findOne($model->modified_by)->username;
                }
            ],
            [
                'attribute' => 'ultima_modificacion',
                'value' => function ($model) {
                    return DateUtils::toFullIsoDate($model->ultima_modificacion);
                }
            ],
        ],
    ]) ?>

</div>

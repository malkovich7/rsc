<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rsc-pedido-cabecera-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'idcliente',
            'idestatus',
            'idprioridad',
            'monto',
            'montoiva',
            'idiva',
            'idcredito',
            'fechaelaboracion',
            'fechaentrega',
            'fechapago',
            'factura',
            'fechaelaboracionfactura',
            'notaspedido:ntext',
            'idtipoenvio',
            'trackingchofer',
            'activo',
            'created_by',
            'modified_by',
            'ultima_modificacion',
        ],
    ]) ?>

</div>

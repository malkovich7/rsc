<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RscClienteProveedor */

$this->title = $model->idcliente;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Cliente Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rsc-cliente-proveedor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idcliente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idcliente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcliente',
            'nombre',
            'apellidos',
            'direccion_entrega',
            'direccion_fiscal',
            'rfc',
            'clienteproveedor',
            'notas',
            'idactivo',
            'fecha_alta',
            'ultima_modificacion',
            'usuario_modifico',
            'created_by',
        ],
    ]) ?>

</div>

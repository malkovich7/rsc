<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscClienteProveedorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Cliente Proveedors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-cliente-proveedor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Cliente Proveedor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcliente',
            'nombre',
            'apellidos',
            'direccion_entrega',
            'direccion_fiscal',
            //'rfc',
            //'clienteproveedor',
            //'notas',
            //'idactivo',
            //'fecha_alta',
            //'ultima_modificacion',
            //'usuario_modifico',
            //'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

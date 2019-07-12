<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscPedidoCabeceraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Pedido Cabeceras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-pedido-cabecera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Pedido Cabecera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idcliente',
            'idestatus',
            'idprioridad',
            'monto',
            //'montoiva',
            //'montoTotal',
            //'idiva',
            //'idcredito',
            //'fechaelaboracion',
            //'fechaentrega',
            //'fechapago',
            //'factura',
            //'fechaelaboracionfactura',
            //'notaspedido:ntext',
            //'idtipoenvio',
            //'trackingchofer',
            //'activo',
            //'created_by',
            //'modified_by',
            //'ultima_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

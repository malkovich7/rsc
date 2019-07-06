<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscPreciosClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Precios Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-precios-cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Precios Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idcliente',
            'idproducto',
            'descuento',
            'idactivo',
            //'ultima_modificacion',
            //'usuario_modifico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscInventarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Inventarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-inventario-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Inventario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idproducto',
            'cantidaddisponible',
            'cantidadrecibida',
            'lote',
            //'caducidad',
            //'notas:ntext',
            //'idactivo',
            //'created_by',
            //'modified_by',
            //'ultima_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

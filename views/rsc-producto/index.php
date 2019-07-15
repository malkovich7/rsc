<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-producto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Producto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombreproducto',
            'preciobase',
            [
                'attribute' => 'idcategoria',
                'value' => 'id0.categoria',
                'filter' => $categorias,
                'filterInputOptions' => ['prompt' => 'Categoria', 'class' => 'form-control']
            ],
            'cantidadminimarequerida',
            //'notas:ntext',
            //'activo',
            //'created_by',
            //'modified_by',
            //'ultima_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

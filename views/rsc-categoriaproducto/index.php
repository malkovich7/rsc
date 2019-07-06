<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscCategoriaproductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Categoriaproductos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-categoriaproducto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Categoriaproducto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categoria',
            'created_by',
            'modified_by',
            'ultima_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
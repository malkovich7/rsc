<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscPrioridadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prioridades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-prioridad-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Prioridad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nivelprioridad',
            'nombreprioridad',
            'descripcion',
            'activo',
            //'created_by',
            //'modified_by',
            //'ultima_modificacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

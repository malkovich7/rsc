<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RscImpuestosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rsc Impuestos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-impuestos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rsc Impuestos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ordering',
            'impuesto',
            'value',
            'created_by',
            //'modified_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

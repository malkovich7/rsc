<?php

use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
            'email:email',
	    [
		'attribute' => 'status',
		'value' => function($model) {
		    return $model->status === 10 ? 'Activo' : 'Inactivo'; 
		},
		'filter' => [
		    0 => 'Inactivo',
		    10 => 'Activo'
		]
	    ],
	    [
		'attribute' => 'created_at',
		'value' => function($model) {
		    return date('Y-m-d H:i:s', $model->created_at);
		}
	    ],
	    [
	        'attribute' => 'updated_at',
		'value' => function($model) {
		    return date('Y-m-d H:i:s', $model->updated_at);
		}
	    ],
	    [
	        'class' => 'yii\grid\ActionColumn',
	        'template' => Helper::filterActionColumn('{view}{delete}{posting}')
	    ],
        ],
    ]); ?>


</div>

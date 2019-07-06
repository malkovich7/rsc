<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RscProducto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rsc-producto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'nombreproducto',
            'preciobase',
	    ['value'=>$model->id0->categoria, 'label'=>'Categoria' ],
            'cantidadminimarequerida',
            'notas:ntext',
            'activo',
            'created_by',
            'modified_by',
            'ultima_modificacion',
        ],
    ]) ?>

</div>

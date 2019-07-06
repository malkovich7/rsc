<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RscInventario */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Inventarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rsc-inventario-view">

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
            'idproducto',
            'cantidaddisponible',
            'cantidadrecibida',
            'lote',
            'caducidad',
            'notas:ntext',
            'idactivo',
            'created_by',
            'modified_by',
            'ultima_modificacion',
        ],
    ]) ?>

</div>

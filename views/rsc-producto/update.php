<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscProducto */

$this->title = 'Update Rsc Producto: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsc-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
	    'model' => $model,
	    'categorias'=>$categorias
    ]) ?>

</div>

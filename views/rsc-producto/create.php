<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscProducto */

$this->title = 'Create Rsc Producto';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-producto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
	    'model' => $model,
	    'categorias'=>$categorias
    ]) ?>

</div>

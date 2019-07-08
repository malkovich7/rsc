<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */
/* @var $catalogs */

$this->title = 'Nuevo Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-pedido-cabecera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'catalogs' => $catalogs
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */

$this->title = 'Update Rsc Pedido Cabecera: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Pedido Cabeceras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsc-pedido-cabecera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscClienteProveedor */

$this->title = 'Update Rsc Cliente Proveedor: ' . $model->idcliente;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Cliente Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcliente, 'url' => ['view', 'id' => $model->idcliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsc-cliente-proveedor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

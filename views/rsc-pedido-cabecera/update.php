<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */
/* @var $catalogs */

$this->title = 'Actualizar Pedido: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';

$this->registerJs('setDays(' . $model->credito->creditotiempodias . ');', View::POS_READY);
?>
<div class="rsc-pedido-cabecera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'catalogs' => $catalogs
    ]) ?>

</div>

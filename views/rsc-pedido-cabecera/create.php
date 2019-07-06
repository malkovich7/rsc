<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */

$this->title = 'Create Rsc Pedido Cabecera';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Pedido Cabeceras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-pedido-cabecera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

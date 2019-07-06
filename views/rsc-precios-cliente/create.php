<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscPreciosCliente */

$this->title = 'Create Rsc Precios Cliente';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Precios Clientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-precios-cliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

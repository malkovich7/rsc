<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscCreditoscliente */

$this->title = 'Update Rsc Creditoscliente: ' . $model->idcliente;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Creditosclientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcliente, 'url' => ['view', 'id' => $model->idcliente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsc-creditoscliente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

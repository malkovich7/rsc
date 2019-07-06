<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscCreditosclienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-creditoscliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcliente') ?>

    <?= $form->field($model, 'idclienteproveedor') ?>

    <?= $form->field($model, 'creditotiempodias') ?>

    <?= $form->field($model, 'creditomonto') ?>

    <?= $form->field($model, 'notas') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'ultima_modificacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

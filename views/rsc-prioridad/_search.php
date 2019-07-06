<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPrioridadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-prioridad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nivelprioridad') ?>

    <?= $form->field($model, 'nombreprioridad') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'activo') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'ultima_modificacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

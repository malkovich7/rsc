<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscCreditoscliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-creditoscliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcliente')->textInput() ?>

    <?= $form->field($model, 'creditotiempodias')->textInput() ?>

    <?= $form->field($model, 'creditomonto')->textInput() ?>

    <?= $form->field($model, 'notas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

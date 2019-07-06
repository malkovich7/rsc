<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPrioridad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-prioridad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nivelprioridad')->textInput() ?>

    <?= $form->field($model, 'nombreprioridad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

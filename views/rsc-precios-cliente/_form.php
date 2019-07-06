<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPreciosCliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-precios-cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'idcliente')->textInput() ?>

    <?= $form->field($model, 'idproducto')->textInput() ?>

    <?= $form->field($model, 'descuento')->textInput() ?>

    <?= $form->field($model, 'idactivo')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_modifico')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

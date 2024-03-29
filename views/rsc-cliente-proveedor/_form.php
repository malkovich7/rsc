<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscClienteProveedor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-cliente-proveedor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcliente')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_entrega')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_fiscal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clienteproveedor')->textInput() ?>

    <?= $form->field($model, 'notas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idactivo')->textInput() ?>

    <?= $form->field($model, 'fecha_alta')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput() ?>

    <?= $form->field($model, 'usuario_modifico')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

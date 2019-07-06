<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-pedido-cabecera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcliente')->textInput() ?>

    <?= $form->field($model, 'idestatus')->textInput() ?>

    <?= $form->field($model, 'idprioridad')->textInput() ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'montoiva')->textInput() ?>

    <?= $form->field($model, 'idiva')->textInput() ?>

    <?= $form->field($model, 'idcredito')->textInput() ?>

    <?= $form->field($model, 'fechaelaboracion')->textInput() ?>

    <?= $form->field($model, 'fechaentrega')->textInput() ?>

    <?= $form->field($model, 'fechapago')->textInput() ?>

    <?= $form->field($model, 'factura')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechaelaboracionfactura')->textInput() ?>

    <?= $form->field($model, 'notaspedido')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idtipoenvio')->textInput() ?>

    <?= $form->field($model, 'trackingchofer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabeceraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-pedido-cabecera-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idcliente') ?>

    <?= $form->field($model, 'idestatus') ?>

    <?= $form->field($model, 'idprioridad') ?>

    <?= $form->field($model, 'monto') ?>

    <?php // echo $form->field($model, 'montoiva') ?>

    <?php // echo $form->field($model, 'idiva') ?>

    <?php // echo $form->field($model, 'idcredito') ?>

    <?php // echo $form->field($model, 'fechaelaboracion') ?>

    <?php // echo $form->field($model, 'fechaentrega') ?>

    <?php // echo $form->field($model, 'fechapago') ?>

    <?php // echo $form->field($model, 'factura') ?>

    <?php // echo $form->field($model, 'fechaelaboracionfactura') ?>

    <?php // echo $form->field($model, 'notaspedido') ?>

    <?php // echo $form->field($model, 'idtipoenvio') ?>

    <?php // echo $form->field($model, 'trackingchofer') ?>

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

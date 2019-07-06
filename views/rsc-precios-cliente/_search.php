<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPreciosClienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-precios-cliente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idcliente') ?>

    <?= $form->field($model, 'idproducto') ?>

    <?= $form->field($model, 'descuento') ?>

    <?= $form->field($model, 'idactivo') ?>

    <?php // echo $form->field($model, 'ultima_modificacion') ?>

    <?php // echo $form->field($model, 'usuario_modifico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

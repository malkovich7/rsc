<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscInventarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-inventario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'idproducto') ?>

    <?= $form->field($model, 'cantidaddisponible') ?>

    <?= $form->field($model, 'cantidadrecibida') ?>

    <?= $form->field($model, 'lote') ?>

    <?php // echo $form->field($model, 'caducidad') ?>

    <?php // echo $form->field($model, 'notas') ?>

    <?php // echo $form->field($model, 'idactivo') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'ultima_modificacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

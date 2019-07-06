<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscInventario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-inventario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'idproducto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidaddisponible')->textInput() ?>

    <?= $form->field($model, 'cantidadrecibida')->textInput() ?>

    <?= $form->field($model, 'lote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caducidad')->textInput() ?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idactivo')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

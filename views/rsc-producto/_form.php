<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscProducto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rsc-producto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nombreproducto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preciobase')->textInput() ?>

    <?= $form->field($model, 'idcategoria')->dropDownList($categorias, ['prompt' => 'Categoria']) ?>

    <?= $form->field($model, 'cantidadminimarequerida')->textInput() ?>

    <?= $form->field($model, 'notas')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'ultima_modificacion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

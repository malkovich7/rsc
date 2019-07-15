<?php

use app\assets\OrderAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RscPedidoCabecera */
/* @var $form yii\widgets\ActiveForm */
/* @var $catalogs */

OrderAsset::register($this);

?>

<div class="rsc-pedido-cabecera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcliente')->dropDownList($catalogs['client'], ['id' => 'clientId', 'class' => 'form-control', 'prompt' => 'Seleccione el cliente']) ?>

    <?= $form->field($model, 'idprioridad')->dropDownList($catalogs['priority'], ['class' => 'form-control', 'prompt' => 'Seleccione la prioridad']) ?>

    <?= $form->field($model, 'idiva')->dropDownList($catalogs['iva'], ['class' => 'form-control', 'prompt' => 'Seleccione el iva']) ?>

    <!--<?= $form->field($model, 'idcredito')->dropDownList($catalogs['credit'], ['id' => 'creditId','class' => 'form-control', 'prompt' => 'Seleccione el crédito']) ?>-->

    <?= $form->field($model, 'fechaentrega')->textInput(['autocomplete' => 'off', 'id' => 'deliveryDate', 'class' => 'form-control datepicker', 'readonly' => true]) ?>

    <?= $form->field($model, 'fechapago')->textInput(['autocomplete' => 'off', 'id' => 'payDate', 'class' => 'form-control datepicker', 'readonly' => true]) ?>

    <?= $form->field($model, 'notaspedido')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscClienteProveedor */

$this->title = 'Create Rsc Cliente Proveedor';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Cliente Proveedors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-cliente-proveedor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

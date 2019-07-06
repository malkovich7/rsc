<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscInventario */

$this->title = 'Update Rsc Inventario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rsc Inventarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rsc-inventario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

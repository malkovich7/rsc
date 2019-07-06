<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscPrioridad */

$this->title = 'Create Rsc Prioridad';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Prioridads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-prioridad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscImpuestos */

$this->title = 'Create Rsc Impuestos';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Impuestos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-impuestos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

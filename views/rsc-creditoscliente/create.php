<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscCreditoscliente */

$this->title = 'Create Rsc Creditoscliente';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Creditosclientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-creditoscliente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

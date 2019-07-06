<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RscCategoriaproducto */

$this->title = 'Create Rsc Categoriaproducto';
$this->params['breadcrumbs'][] = ['label' => 'Rsc Categoriaproductos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rsc-categoriaproducto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

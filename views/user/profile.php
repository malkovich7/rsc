<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Cambiar Correo Electrónico';
$this->params['breadcrumbs'][] = 'Cambiar Correo Electrónico';
?>
<div class="user-profile">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

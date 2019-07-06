<?php

/* @var $this yii\web\View */

$this->title = 'Rancho San Cayetano';
$user = Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->username;
?>
<div class="site-index">

    <div class="container">
        <div class="jumbotron">
            <h1>Bienvenido</h1>
            <h3><? echo $user ?></h3>
        </div>
    </div>
</div>

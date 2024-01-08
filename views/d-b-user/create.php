<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DBUser $model */

$this->title = 'Criar Novo Usuário';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dbuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DBUser $model */

$this->title = 'Update Db User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Db Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dbuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

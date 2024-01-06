<?php
    use \yii\bootstrap5\ActiveForm;
    use \yii\helpers\Html;
?>
<h1>weather/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($model, 'region') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar clima da região', ['class' => 'btn btn-primary']) ?>
    </div>

<?php $form = ActiveForm::end() ?>
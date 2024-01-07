<?php
    use \yii\bootstrap5\ActiveForm;
    use \yii\helpers\Html;
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Clima</h1>

            <p>
                Pesquisa de clima/tempo por região (cidade).
            </p>

            <?php $form = ActiveForm::begin() ?>

                <?= $form->field($model, 'region') ?>

                <div class="form-group">
                    <?= Html::submitButton('Buscar clima da região', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php $form = ActiveForm::end() ?>

            <?php 
                if (isset($regiao) && !empty($regiao)){
                    echo '<h1>'.$regiao.'</h1>';
                }

                echo '<pre>'; print_r($regionWeather); echo '</pre>';
            ?>
        </div>
    </div>
</div>

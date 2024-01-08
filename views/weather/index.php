<?php
    use \yii\bootstrap5\ActiveForm;
    use \yii\helpers\Html;
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Clima</h1>

            <p>
                Pesquisa de clima/tempo por região.
            </p>

            <?php $form = ActiveForm::begin() ?>

                <?= $form->field($model, 'region') ?>

                <div class="form-group">
                    <?= Html::submitButton('Buscar clima da região', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php $form = ActiveForm::end() ?>

            <?php 
                if (isset($region) && !empty($region)){
                    echo '<h2>Região pesquisada: '.$region.'</h2>';
                }

                if (!empty($regionWeather)){
                    ?>
                    <div class='container'>
                        <div class="row d-flex align-items-stretch">

                            <?php 
                                for($x = 0; $x <=3; $x++){
                                    //print_r($regionWeather->forecast[$x]);
                            ?>

                            <div class="col-3">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="https://assets.hgbrasil.com/weather/icons/conditions/<?=$regionWeather->forecast[$x]->condition?>.svg" alt="Card image cap">
                                    <div class="card-body <?= ($x === 0) ? 'bg-warning': 'bg-info'?>">
                                        <h5 class="card-title"><?=$regionWeather->forecast[$x]->date?><?= ($x === 0) ? '(Hoje)': ''?></h5>
                                        <div>Dia da Semana: <?=$regionWeather->forecast[$x]->weekday?></div>
                                        <div>Temp. MAX: <?=$regionWeather->forecast[$x]->max?>º</div>
                                        <div>Temp. MIN: <?=$regionWeather->forecast[$x]->min?>º</div>
                                        <div>Nebulosidade: <?=$regionWeather->forecast[$x]->cloudiness?></div>
                                        <div>Chuva: <?=$regionWeather->forecast[$x]->rain?></div>
                                        <div>Prob. Chuva: <?=$regionWeather->forecast[$x]->rain_probability?></div>
                                        <div>Vel. do Vento: <?=$regionWeather->forecast[$x]->wind_speedy?></div>
                                        <div>Descrição: <?=$regionWeather->forecast[$x]->description?></div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

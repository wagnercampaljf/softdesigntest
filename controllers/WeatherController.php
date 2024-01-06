<?php

namespace app\controllers;

use PHPUnit\Util\Json;
use RestClient;
use app\models\WeatherForm;
use yii\filters\AccessControl;


class WeatherController extends \yii\web\Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => [],
                    'rules' => [
                        [
                            'actions' => ['index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $region = '';
        $regionWeather = [];

        $weatherForm = new WeatherForm;
        $post = \Yii::$app->request->post();

        if ($weatherForm->load($post) && $weatherForm->validate()){
            $teste = new RestClient([
                'base_url' => 'https://api.hgbrasil.com',
                'headers' => [
                    'Accept' => 'application/json'
                ]
                ]);
    
            $result = $teste->get('/weather');
            $data = json_decode($result->response);
            echo "<pre>"; print_r($data); echo "</pre>"; die;
        }

        return $this->render('index', ['model' => $weatherForm, 'region' => $region, 'regionWeather' => $regionWeather]);        
    }

}

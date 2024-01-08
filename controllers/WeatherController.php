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
        $post = $this->request->post();

        if ($weatherForm->load($post) && $weatherForm->validate()){
            if (!empty($weatherForm->region)){
                
                $region = $weatherForm->region;
                $regionWeather = $this->getWeatherByRegion($weatherForm->region);

            }
        }

        return $this->render('index', ['model' => $weatherForm, 'region' => $region, 'regionWeather' => $regionWeather]);        
    }

    public function getWeatherKey(): string{
        return \Yii::$app->params['weatherKey'];
    }

    public function getWeatherURI(): string{
        return \Yii::$app->params['weatherURI'];
    }

    public function getWeatherByRegion($region): object{

        $api = new RestClient([
            'base_url' => $this->getWeatherURI(),
            'headers' => [
                'Accept' => 'application/json'
            ]
            ]);

        $result = $api->get('/weather?key=' . $this->getWeatherKey() . '&city_name=' . urlencode($region));

        if (isset($result->response)){
            $resultJson = json_decode($result->response);
            if (isset($resultJson->results)){
                if ($result->error === "") {
                    return $resultJson->results;
                }
            }
        }
        
        return null;
    }
}

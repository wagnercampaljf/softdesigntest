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
                
                $regionWeather = $this->getWeatherByRegion($weatherForm->region);

            }
        }

        return $this->render('index', ['model' => $weatherForm, 'region' => $region, 'regionWeather' => $regionWeather]);        
    }

    public function getWeatherKey(){
        return \Yii::$app->params['weatherKey'];
    }

    public function getWeatherURI(){
        return \Yii::$app->params['weatherURI'];
    }

    public function getWeatherByRegion($region){
        $url = $this->getWeatherURI() . '/weather?key=' . $this->getWeatherKey() . '&city_name=' . urlencode($region);
print_r($url);
        $api = new RestClient([
            'base_url' => $url,
            'headers' => [
                'Accept' => 'application/json'
            ]
            ]);

        $result = $api->get('');
        if (isset($result->response)){
            return json_decode($result->response);
        }
        
        return null;
    }
}

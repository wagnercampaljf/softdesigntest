<?php

namespace app\models;

use Yii;
use yii\base\Model;

class WeatherForm extends Model
{
    public $region;

    public function rules()
    {
        return [
            [['region'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'region' => 'Região'
        ];
    }
}

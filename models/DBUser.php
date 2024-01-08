<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "db_user".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 */
class DBUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'db_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'password', 'email'], 'required'],
            [['first_name'], 'string', 'max' => 60],
            [['last_name', 'auth_key'], 'string', 'max' => 200],
            [['username', 'password'], 'string', 'max' => 50],
            ['email', 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Nome',
            'last_name' => 'Sobrenome',
            'email' => 'Email',
            'username' => 'Login',
            'password' => 'Senha',
            'auth_key' => 'Auth Key',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $description
 * @property int $number_of_pages
 * @property string|null $registration_date
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'author', 'description', 'number_of_pages'], 'required'],
            [['number_of_pages'], 'integer'],
            [['registration_date'], 'safe'],
            [['title', 'author'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Título',
            'author' => 'Autor',
            'description' => 'Descrição',
            'number_of_pages' => 'Número de Páginas',
            'registration_date' => 'Data de Cadastro',
        ];
    }
}

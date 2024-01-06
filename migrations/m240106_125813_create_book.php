<?php

use yii\db\Migration;
use yii\db\Expression;


/**
 * Class m240106_125813_create_book
 */
class m240106_125813_create_book extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'author' => $this->string(100)->notNull(),
            'description' => $this->string(1000)->notNull(),
            'number_of_pages' => $this->integer()->notNull(),
            'registration_date' => $this->date()->notNull()
        ]);
    }

    public function down()
    {
        echo "m240106_125813_create_book cannot be reverted.\n";

        $this->dropTable('book');

        return false;
    }
}

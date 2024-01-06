<?php

use yii\db\Migration;

/**
 * Class m240106_124454_create_db_user
 */
class m240106_124454_create_db_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('db_user',[
            'id' => $this->primaryKey(),
            'first_name' => $this->string(60)->notNull(),
            'last_name' => $this->string(200)->notNull(),
            'username' => $this->string(50)->notNull(),
            'password' => $this->string(50)->notNull(),
            'auth_key' => $this->string(200), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        echo "m240106_124454_create_db_user cannot be reverted.\n";

        $this->dropTable('db_user');

        return false;
    }
}

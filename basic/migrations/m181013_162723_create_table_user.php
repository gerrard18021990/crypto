<?php

use app\models\User;
use yii\db\Migration;

class m181013_162723_create_table_user extends Migration
{

    public function safeUp()
    {
        $this->createTable(User::tableName(), [
            'id' => $this->primaryKey(),
            'login' => $this->string()->notNull()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'username' => $this->string(),
            'password' => $this->string()->notNull(),
            'token' => $this->string()->notNull(),
            'auth_key' => $this->string()->notNull(),
            'referral_id' => $this->integer(),
            'create_time' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable(User::tableName());
    }
}
<?php

use yii\db\Migration;

/**
 * Class m240406_135403_nickDB
 */
class m240406_135403_nickDB extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'login' => $this->string()->unique()->notNull(),
            'password'=> $this->string()->notNull(),
            'username' => $this->string()->notNull(),
            'age' => $this->integer(),
            'is_admin'=> $this->boolean()->defaultValue(false)
        ]);
        $this->insert('users', [
           'login' => 'admin',
           'password' => password_hash('admin', PASSWORD_DEFAULT),
           'username' => 'Админ Админович',
            'age' => '12',
            'is_admin' => true
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240406_135403_nickDB cannot be reverted.\n";

        return false;
    }
    */
}

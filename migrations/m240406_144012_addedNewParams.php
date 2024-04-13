<?php

use yii\db\Migration;

/**
 * Class m240406_144012_addedNewParams
 */
class m240406_144012_addedNewParams extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('users', 'username');
        $this->addColumn('users', 'name', $this->string()->notNull());
        $this->addColumn('users', 'surname', $this->string()->notNull());
        $this->addColumn('users', 'patronymic', $this->string()->notNull());

        $this->update('users', 'name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return  true;

        return false;
    }




}

<?php

use yii\db\Migration;

/**
 * Class m190415_055155_branch
 */
class m190415_055155_branch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
         $this->createTable('{{%branch}}', [
        'id' => $this->primaryKey(),
        'branch_no' => $this->string(5)->notNull()->unique(),
        'name' => $this->string(200),
        'street' => $this->string(150),
        'city' => $this->string(150),
        'postcode'=> $this->string(10)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_055155_branch cannot be reverted.\n";

        return false;
    }
    */
}

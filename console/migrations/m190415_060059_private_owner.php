<?php

use yii\db\Migration;

/**
 * Class m190415_060059_private_owner
 */
class m190415_060059_private_owner extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {  
         $this->createTable('{{%private_owner}}', [
        'id' => $this->primaryKey(),
        'owner_no' => $this->string(5)->notNull()->unique(),
            'first_name' => $this->string(300)->notNull(),
            'last_name' => $this->string(300)->notNull(),
            'address' => $this->string(),
            'telephone' => $this->integer(),
            'user_id' => $this->integer()
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%private_owner}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_060059_private_owner cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m190415_060332_client
 */
class m190415_060332_client extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
      'id' => $this->primaryKey(),
        'client_no' => $this->string(5)->notNull()->unique(),
        'f_name' => $this->string(100)->notNull(),
        'l_name' => $this->string(100)->notNull(),
        'tel_no' => $this->string(11),
        'pref_type' => $this->string(50),
        'max_rent' => $this->decimal(7,2)
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_060332_client cannot be reverted.\n";

        return false;
    }
    */
}

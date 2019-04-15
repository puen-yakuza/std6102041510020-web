<?php

use yii\db\Migration;

/**
 * Class m190415_060245_registration
 */
class m190415_060245_registration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registration}}', [
      'id' => $this->primaryKey(),
        'client_id' => $this->integer()->notNull(),
            'property_for_rent_id' => $this->integer()->notNull(),
            'dateJoined' => $this->date()
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%registration}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_060245_registration cannot be reverted.\n";

        return false;
    }
    */
}

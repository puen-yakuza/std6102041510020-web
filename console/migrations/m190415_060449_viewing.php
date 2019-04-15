<?php

use yii\db\Migration;

/**
 * Class m190415_060449_viewing
 */
class m190415_060449_viewing extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
      'id' => $this->primaryKey(),
        'client_id' => $this->integer()->notNull(),
        'property_for_rent_id' => $this->integer()->notNull(),
        'view_date' => $this->date(),
        'comment' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_060449_viewing cannot be reverted.\n";

        return false;
    }
    */
}

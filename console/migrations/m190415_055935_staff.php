<?php

use yii\db\Migration;

/**
 * Class m190415_055935_staff
 */
class m190415_055935_staff extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
        'staff_no' => $this->string(5)->notNull()->unique(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'position' => $this->string(50),
            'sex' => $this->string(2),
            'd_o_b' => $this->date(),
            'salary' => $this->decimal(17,2),
            'branch_id' => $this->integer(11)
            ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_055935_staff cannot be reverted.\n";

        return false;
    }
    */
}

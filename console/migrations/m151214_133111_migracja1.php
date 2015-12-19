<?php

use yii\db\Migration;

class m151214_133111_migracja1 extends Migration
{
    public function up()
    {
            $this->execute("ALTER TABLE user add column flag int;");
    }

    public function down()
    {
        echo "m151214_133111_migracja1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

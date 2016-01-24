<?php

use yii\db\Migration;

class m160111_132223_alter extends Migration
{
    public function up()
    {
              $this->execute("ALTER TABLE  `dish` CHANGE  `koszt_dania`  `koszt_dania` FLOAT( 11 ) NOT NULL ;
                ALTER TABLE  `dish` ADD  `opis` TEXT NOT NULL AFTER  `nazwa_dania` ;");
    }

    public function down()
    {
        echo "m160111_132223_alter cannot be reverted.\n";

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

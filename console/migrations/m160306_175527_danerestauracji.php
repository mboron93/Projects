<?php

use yii\db\Migration;

class m160306_175527_danerestauracji extends Migration
{
    public function up()
    {
              $this->execute("  ALTER TABLE  `restaurant` ADD  `telefon` INT( 11 ) NOT NULL , ADD  `e-mail` VARCHAR( 55 ) NOT NULL ;");

    }

    public function down()
    {
        echo "m160306_175527_danerestauracji cannot be reverted.\n";

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

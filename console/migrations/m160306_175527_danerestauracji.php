<?php

use yii\db\Migration;

class m160306_175527_danerestauracji extends Migration
{
    public function up()
    {
              $this->execute(  " ALTER TABLE  `order_detail` ADD  `ulica` VARCHAR( 35 ) NOT NULL ,
                        ADD  `miasto` VARCHAR( 35 ) NOT NULL ,
                        ADD  `telefon` INT( 12 ) NOT NULL ;");              
    
              
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

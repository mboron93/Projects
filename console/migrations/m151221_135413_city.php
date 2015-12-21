<?php

use yii\db\Migration;

class m151221_135413_city extends Migration
{
    public function up()
    {
           $sql = "CREATE TABLE `city` (
 `id_miasta` int(11) NOT NULL AUTO_INCREMENT,
 `miasto` varchar(30) NOT NULL,
 PRIMARY KEY (`id_miasta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->execute($sql);
    }

    public function down()
    {
        echo "m151221_135433_city cannot be reverted.\n";

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

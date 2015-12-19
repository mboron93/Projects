<?php

use yii\db\Migration;

class m151219_112922_wybor_miast extends Migration
{
    public function up()
    {
                $sql = "CREATE TABLE `wybor_miast` (
 `id_miasta` int(11) NOT NULL AUTO_INCREMENT,
 `miasto` varchar(30) NOT NULL,
 PRIMARY KEY (`id_miasta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->execute($sql);
 
    }

    public function down()
    {
        echo "m151219_112922_wybor_miast cannot be reverted.\n";

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

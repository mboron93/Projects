<?php

use yii\db\Migration;

class m151219_112947_restauracje extends Migration
{
    public function up()
    {
        $sql = "CREATE TABLE `restauracje` (
 `id_restauracji` int(11) NOT NULL AUTO_INCREMENT,
 `nazwa` varchar(50) NOT NULL,
 `id_miasta` int(30) NOT NULL,
 PRIMARY KEY (`id_restauracji`,`id_miasta`),
 KEY `id_miasta` (`id_miasta`),
 CONSTRAINT `restauracje_ibfk_1` FOREIGN KEY (`id_miasta`) REFERENCES `wybor_miast` (`id_miasta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
                    $this->execute($sql);
    
    }

    public function down()
    {
        echo "m151219_112947_restauracje cannot be reverted.\n";

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

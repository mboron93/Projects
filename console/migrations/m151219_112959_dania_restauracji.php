<?php

use yii\db\Migration;

class m151219_112959_dania_restauracji extends Migration
{
    public function up()
    {
             $sql = "CREATE TABLE `dania_restauracji` (
 `id_dania` int(11) NOT NULL AUTO_INCREMENT,
 `nazwa_dania` varchar(30) NOT NULL,
 `koszt_dania` int(11) NOT NULL,
 `id_restauracji` int(11) NOT NULL,
 PRIMARY KEY (`id_dania`,`id_restauracji`),
 KEY `id_restauracji` (`id_restauracji`),
 CONSTRAINT `dania_restauracji_ibfk_1` FOREIGN KEY (`id_restauracji`) REFERENCES `restauracje` (`id_restauracji`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
           $this->execute($sql);
       
    }

    public function down()
    {
        echo "m151219_112959_dania_restauracji cannot be reverted.\n";

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

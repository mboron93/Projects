<?php

use yii\db\Migration;

class m160522_140808_restaurant_type extends Migration
{
    public function up()
    {
             $sql = "CREATE TABLE `restaurant_type` (
 `type_id` int(11) NOT NULL ,
 `type` varchar(30) NOT NULL ,
 `id_restauracji` int(11) NOT NULL,
 PRIMARY KEY (`type_id`,`id_restauracji`),
 KEY `id_restauracji` (`id_restauracji`),
 CONSTRAINT `typ_restauracji_ibfk_1` FOREIGN KEY (`id_restauracji`) REFERENCES `restaurant` (`id_restauracji`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
           $this->execute($sql);
    }

    public function down()
    {
        echo "m160522_140808_restaurant_type cannot be reverted.\n";

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

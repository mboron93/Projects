<?php

use yii\db\Migration;

class m151225_111837_order extends Migration
{
    public function up()
    {
         $sql = "CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_usera` int(11) NOT NULL,
  `wartosc` decimal(5,2) NOT NULL,
  `data` varchar(10) NOT NULL,
  PRIMARY KEY (`id_order`,`id_usera`),
  KEY `id_order` (`id_order`),
 CONSTRAINT `id_user_fk` FOREIGN KEY (`id_usera`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->execute($sql);
    }

    public function down()
    {
        echo "m151225_111837_order cannot be reverted.\n";

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

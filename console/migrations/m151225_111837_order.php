<?php

use yii\db\Migration;

class m151225_111837_order extends Migration
{
    public function up()
    {
         $sql = "CREATE TABLE IF NOT EXISTS `order` (
  `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT,
  `id_usera` int(11) NOT NULL,
  `id_dania` int(11) NOT NULL,
  `porcja` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(3,2) NOT NULL,
  PRIMARY KEY (`id_zamowienia`,`id_usera`,`id_dania`),
  KEY `id_zamowienia` (`id_zamowienia`),
 CONSTRAINT `id_user_fk` FOREIGN KEY (`id_usera`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
 CONSTRAINT `id_dania_fk` FOREIGN KEY (`id_dania`) REFERENCES `dish` (`id_dania`) ON DELETE NO ACTION ON UPDATE NO ACTION
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

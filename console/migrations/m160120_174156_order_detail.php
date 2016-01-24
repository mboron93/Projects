<?php

use yii\db\Migration;

class m160120_174156_order_detail extends Migration
{
    public function up()
    {
   $sql="CREATE TABLE IF NOT EXISTS `order_detail` (
  `id_or_detail` int(11) NOT NULL AUTO_INCREMENT,
   `id_order` int(11) NOT NULL,
  `id_dania` int(11) NOT NULL,
  `porcja` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL,
  `cena` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id_or_detail`,`id_dania`),
  KEY `id_or_detail` (`id_or_detail`),
 CONSTRAINT `id_dania_fk` FOREIGN KEY (`id_dania`) REFERENCES `dish` (`id_dania`) ON DELETE NO ACTION ON UPDATE NO ACTION,
 CONSTRAINT `id_order_fk` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE NO ACTION ON UPDATE NO ACTION
 )ENGINE=InnoDB DEFAULT CHARSET=utf8";
            $this->execute($sql);
    }

    public function down()
    {
        echo "m160120_174156_order_detail cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m160410_082711_admin extends Migration
{
    public function up()
    {
             $sql = <<<SQL
INSERT INTO user (username,auth_key,password_hash,password_reset_token,email,status,created_at,updated_at,flag)
VALUES ('admin', 'psZ17tNF0CL0kg3beG0RbP1eCLfh0OBZ', '$2y$13\$hTLXX6QEcsXvEdk.dQHGGOLUzvVVH.sHydshRpUTHSjqVuIiLsShW', NULL, 'admin@jedzonko.pl', 10, 1460277066, 1460277066, 10);
SQL;
        $this->execute($sql);
    }

    public function down()
    {
        echo "m160410_082711_admin cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m160420_045444_add_user_role_field extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'role', $this->string(64));

        $this->update('{{%user}}', ['role' => 'user']);
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'role');
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

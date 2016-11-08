<?php

use yii\db\Migration;

class m161108_163051_create_users_indexes extends Migration
{
    public function up()
    {
        $this->createIndex(
            'idx-users-username',
            'users',
            'username'
        );

        $this->addForeignKey(
            'fk-users-created-by',
            'users',
            'created_by',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-users-modified-by',
            'users',
            'modified_by',
            'users',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-users-created-by',
            'users'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-users-modified-by',
            'users'
        );


        // drops index for column `author_id`
        $this->dropIndex(
            'idx-users-username',
            'users'
        );

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

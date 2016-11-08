<?php

use yii\db\Migration;

class m161108_162849_create_authors_indexes extends Migration
{
    public function up()
    {
        $this->addForeignKey(
            'fk-authors-user-id',
            'authors',
            'user_id',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-authors-created-by',
            'authors',
            'created_by',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-authors-modified-by',
            'authors',
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
            'fk-authors-user-id',
            'authors'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-authors-created-by',
            'authors'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-authors-modified-by',
            'authors'
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

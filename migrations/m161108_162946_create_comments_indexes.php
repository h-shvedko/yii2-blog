<?php

use yii\db\Migration;

class m161108_162946_create_comments_indexes extends Migration
{
    public function up()
    {
        $this->createIndex(
            'idx-comments-title',
            'comments',
            'title'
        );

        $this->addForeignKey(
            'fk-comments-author-id',
            'comments',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-comments-created-by',
            'comments',
            'created_by',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-comments-modified-by',
            'comments',
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
            'fk-comments-author-id',
            'comments'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-comments-created-by',
            'comments'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-comments-modified-by',
            'comments'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-comments-title',
            'comments'
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

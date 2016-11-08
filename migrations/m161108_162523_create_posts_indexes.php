<?php

use yii\db\Migration;

class m161108_162523_create_posts_indexes extends Migration
{
    public function up()
    {

        $this->createIndex(
            'idx-posts-title',
            'posts',
            'title'
        );

        $this->addForeignKey(
            'fk-posts-author-id',
            'posts',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-posts-created-by',
            'posts',
            'created_by',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-posts-modified-by',
            'posts',
            'modified_by',
            'users',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-posts-attachment-id',
            'posts',
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
            'fk-posts-author-id',
            'posts'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-posts-created-by',
            'posts'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-posts-modified-by',
            'posts'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-posts-attachment-id',
            'posts'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-posts-title',
            'posts'
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

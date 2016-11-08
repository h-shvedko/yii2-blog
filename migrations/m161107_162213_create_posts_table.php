<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 * Has foreign keys to the tables:
 * 
 * - authors
 * - attachments
 * - users
 */
class m161107_162213_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'short_content' => $this->text()->notNull(),
            'content' => $this->text()->notNull(),
            'attachment_id' =>$this->integer(6),
            'author_id' => $this->integer(6)->notNull(),
            'created_by' => $this->integer(6)->notNull(),
            'modified_by' => $this->integer(6)->notNull(),
            'date_created' => $this->dateTime()->notNull(),
            'date_modified' => $this->dateTime()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0),
        ]);

//       
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}

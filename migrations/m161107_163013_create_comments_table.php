<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 * Has foreign keys to the tables:
 *
 * - users
 */
class m161107_163013_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
            'content' => $this->text()->notNull(),
            'author_id' => $this->integer(6)->notNull(),
            'created_by' => $this->integer(6)->notNull(),
            'modified_by' => $this->integer(6)->notNull(),
            'date_created' => $this->dateTime()->notNull(),
            'date_modified' => $this->dateTime()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comments');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 * Has foreign keys to the tables:
 *
 * - users
 */
class m161107_163029_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(50)->notNull()->unique(),
            'password' => $this->string(50)->notNull()->unique(),
            'avatar' => $this->integer(6),
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
        $this->dropTable('users');
    }
}

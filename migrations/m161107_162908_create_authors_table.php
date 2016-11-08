<?php

use yii\db\Migration;

/**
 * Handles the creation of table `authors`.
 * Has foreign keys to the tables:
 *
 * - users
 */
class m161107_162908_create_authors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(6)->notNull(),
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
        $this->dropTable('authors');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `attachments`.
 * Has foreign keys to the tables:
 *
 * - users
 */
class m161107_162949_create_attachments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('attachments', [
            'id' => $this->primaryKey(),
            'file_path' => $this->string()->notNull()->unique(),
            'file_name' => $this->string()->notNull()->unique(),
            'created_by' => $this->integer(6)->notNull(),
            'modified_by' => $this->integer(6)->notNull(),
            'date_created' => $this->dateTime()->notNull(),
            'date_modified' => $this->dateTime()->notNull(),
            'is_deleted' => $this->boolean()->defaultValue(0),
        ]);

//        $this->addForeignKey(
//            'fk-attachments-user-id',
//            'attachments',
//            'user_id',
//            'users',
//            'id',
//            'CASCADE'
//        );
//
//        $this->addForeignKey(
//            'fk-attachments-created-by',
//            'attachments',
//            'created_by',
//            'users',
//            'id',
//            'CASCADE'
//        );
//
//        $this->addForeignKey(
//            'fk-attachments-modified-by',
//            'attachments',
//            'modified_by',
//            'users',
//            'id',
//            'CASCADE'
//        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-attachments-user-id',
            'attachments'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-attachments-created-by',
            'attachments'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-attachments-modified-by',
            'attachments'
        );
        
        $this->dropTable('attachments');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation for table `contact`.
 */
class m160907_092402_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'name' => 'string NOT NULL',
            'email' => 'string NOT NULL',
            'textArea' => 'string NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact');
    }
}

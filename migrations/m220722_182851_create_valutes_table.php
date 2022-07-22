<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%valutes}}`.
 */
class m220722_182851_create_valutes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%valutes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'num_code' => $this->integer(),
            'char_code' => $this->string(),
            'old_value' => $this->integer(),
            'new_value' => $this->integer(),
            'created_date' => $this->dateTime(),
            'updated_date' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%valutes}}');
    }
}

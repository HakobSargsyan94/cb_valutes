<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valutes".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $num_code
 * @property string|null $char_code
 * @property int|null $old_value
 * @property int|null $new_value
 * @property string|null $created_date
 * @property string|null $updated_date
 */
class Valutes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'valutes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_code', 'old_value', 'new_value'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['name', 'char_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'num_code' => 'Num Code',
            'char_code' => 'Char Code',
            'old_value' => 'Old Value',
            'new_value' => 'New Value',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }
}

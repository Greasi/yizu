<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "company".
 *
 * @property \MongoId|string $_id
 * @property mixed $name
 */
class Company extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'company'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'c_name',
            'c_show',
            'c_desc',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_name'], 'safe'],
            [['c_show'], 'safe'],
            [['c_desc'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'c_name' => 'Name',
        ];
    }
}

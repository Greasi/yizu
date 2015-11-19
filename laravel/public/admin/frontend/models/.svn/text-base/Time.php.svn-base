<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "zhiye".
 *
 * @property \MongoId|string $_id
 * @property mixed $name
 */
class Time extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'time'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            't_name',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_name'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            't_name' => 'Name',
        ];
    }
}

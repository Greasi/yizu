<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "zhiye".
 *
 * @property \MongoId|string $_id
 * @property mixed $name
 */
class Zhiye extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'zhiye'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'z_name',
            'z_show',
            'z_desc',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['z_name'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'z_name' => 'Name',
        ];
    }
}

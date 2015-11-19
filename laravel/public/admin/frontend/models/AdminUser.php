<?php

namespace app\models;

use Yii;

/**
 * This is the model class for collection "admin_user".
 *
 * @property \MongoId|string $_id
 * @property mixed $username
 * @property mixed $password
 */
class AdminUser extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['niuke', 'admin_user'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
            '_id',
            'username',
            'password',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            '_id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}

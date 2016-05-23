<?php

namespace frontend\modules\BilgiSistemi\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $username
 * @property string $hocaadi
 * @property string $message
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'hocaadi', 'message'], 'required'],
            [['message'], 'string'],
            [['username', 'hocaadi'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'hocaadi' => 'Hocaadi',
            'message' => 'Message',
        ];
    }
}

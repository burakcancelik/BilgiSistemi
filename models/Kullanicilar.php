<?php

namespace burakcancelik\bilgisistemi\models;

use Yii;

/**
 * This is the model class for table "kullanicilar".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $usertype
 */
class Kullanicilar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kullanicilar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'usertype'], 'required'],
            [['username', 'password', 'usertype'], 'string', 'max' => 20]
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
            'password' => 'Password',
            'usertype' => 'Usertype',
        ];
    }
}

<?php

namespace burakcancelik\bilgisistemi\models;

use Yii;

/**
 * This is the model class for table "hocalar".
 *
 * @property integer $hocaid
 * @property string $hocaadi
 * @property string $dersi
 */
class Hocalar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hocalar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hocaadi', 'dersi'], 'required'],
            [['hocaadi'], 'string', 'max' => 20],
            [['dersi'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hocaid' => 'Hocaid',
            'hocaadi' => 'Hocaadi',
            'dersi' => 'Dersi',
        ];
    }
}

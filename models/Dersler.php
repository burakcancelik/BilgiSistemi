<?php

namespace burakcancelik\bilgisistemi\models;

use Yii;

/**
 * This is the model class for table "dersler".
 *
 * @property integer $ID
 * @property string $Adi
 * @property integer $Kredi
 * @property string $hocaadi
 */
class Dersler extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dersler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Adi', 'Kredi', 'hocaadi'], 'required'],
            [['Kredi'], 'integer'],
            [['Adi', 'hocaadi'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Adi' => 'Adi',
            'Kredi' => 'Kredi',
            'hocaadi' => 'Hocaadi',
        ];
    }
}

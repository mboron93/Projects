<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id_miasta
 * @property string $miasto
 *
 * @property Restaurant[] $restaurants
 */
class City extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['miasto'], 'required'],
            [['miasto'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_miasta' => 'Id Miasta',
            'miasto' => 'Miasto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRestaurants()
    {
        return $this->hasMany(Restaurant::className(), ['id_miasta' => 'id_miasta']);
    }
   
}

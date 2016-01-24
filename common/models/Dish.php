<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dish".
 *
 * @property integer $id_dania
 * @property string $nazwa_dania
 * @property integer $koszt_dania
 * @property integer $id_restauracji
 * @property string $rodzaj
 *
 * @property Restaurant $idRestauracji
 * @property Order[] $orders
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazwa_dania', 'koszt_dania', 'id_restauracji', 'rodzaj'], 'required'],
            [['koszt_dania', 'id_restauracji'], 'integer'],
            [['rodzaj'], 'string'],
            [['nazwa_dania'], 'string', 'max' => 30],
            [['id_restauracji'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['id_restauracji' => 'id_restauracji']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_dania' => 'Id Dania',
            'nazwa_dania' => 'Nazwa Dania',
            'koszt_dania' => 'Koszt Dania',
            'id_restauracji' => 'Id Restauracji',
            'rodzaj' => 'Rodzaj',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRestauracji()
    {
        return $this->hasOne(Restaurant::className(), ['id_restauracji' => 'id_restauracji']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id_dania' => 'id_dania']);
    }
}

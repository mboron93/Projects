<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dish".
 *
 * @property integer $id_dania
 * @property string $nazwa_dania
 * @property string $opis
 * @property double $koszt_dania
 * @property integer $id_restauracji
 * @property string $rodzaj
 *
 * @property Restaurant $idRestauracji
 * @property OrderDetail[] $orderDetails
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
            [['nazwa_dania', 'opis', 'koszt_dania', 'id_restauracji', 'rodzaj'], 'required'],
            [['opis', 'rodzaj'], 'string'],
            [['koszt_dania'], 'number'],
            [['id_restauracji'], 'integer'],
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
            'opis' => 'Opis',
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
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['id_dania' => 'id_dania']);
    }
}

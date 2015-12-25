<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id_zamowienia
 * @property integer $id_usera
 * @property integer $id_dania
 * @property integer $porcja
 * @property integer $ilosc
 * @property string $cena
 *
 * @property User $idUsera
 * @property Dish $idDania
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usera', 'id_dania', 'porcja', 'ilosc', 'cena'], 'required'],
            [['id_usera', 'id_dania', 'porcja', 'ilosc'], 'integer'],
            [['cena'], 'number'],
            [['id_usera'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_usera' => 'id']],
            [['id_dania'], 'exist', 'skipOnError' => true, 'targetClass' => Dish::className(), 'targetAttribute' => ['id_dania' => 'id_dania']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_zamowienia' => 'Id Zamowienia',
            'id_usera' => 'Id Usera',
            'id_dania' => 'Id Dania',
            'porcja' => 'Porcja',
            'ilosc' => 'Ilosc',
            'cena' => 'Cena',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsera()
    {
        return $this->hasOne(User::className(), ['id' => 'id_usera']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDania()
    {
        return $this->hasOne(Dish::className(), ['id_dania' => 'id_dania']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\OrderQuery(get_called_class());
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $id_or_detail
 * @property integer $id_order
 * @property integer $id_dania
 * @property string $porcja
 * @property integer $ilosc
 * @property string $cena
 *
 * @property Dish $idDania
 * @property Order $idOrder
 */
class Detail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_order', 'id_dania', 'porcja', 'ilosc', 'cena'], 'required'],
            [['id_order', 'id_dania', 'ilosc'], 'integer'],
            [['porcja'], 'string'],
            [['cena'], 'number'],
            [['id_dania'], 'exist', 'skipOnError' => true, 'targetClass' => Dish::className(), 'targetAttribute' => ['id_dania' => 'id_dania']],
            [['id_order'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['id_order' => 'id_order']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_or_detail' => 'Id Or Detail',
            'id_order' => 'Id Order',
            'id_dania' => 'Id Dania',
            'porcja' => 'Porcja',
            'ilosc' => 'Ilosc',
            'cena' => 'Cena',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDania()
    {
        return $this->hasOne(Dish::className(), ['id_dania' => 'id_dania']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrder()
    {
        return $this->hasOne(Order::className(), ['id_order' => 'id_order']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\DetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\DetailQuery(get_called_class());
    }
}

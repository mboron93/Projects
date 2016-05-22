<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "restaurant_type".
 *
 * @property integer $type_id
 * @property string $type
 * @property integer $id_restauracji
 *
 * @property Restaurant $idRestauracji
 */
class RestaurantType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'restaurant_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'type', 'id_restauracji'], 'required'],
            [['type_id', 'id_restauracji'], 'integer'],
            [['type'], 'string', 'max' => 30],
            [['id_restauracji'], 'exist', 'skipOnError' => true, 'targetClass' => Restaurant::className(), 'targetAttribute' => ['id_restauracji' => 'id_restauracji']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type' => 'Type',
            'id_restauracji' => 'Id Restauracji',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRestauracji()
    {
        return $this->hasOne(Restaurant::className(), ['id_restauracji' => 'id_restauracji']);
    }
}

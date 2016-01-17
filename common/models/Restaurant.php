<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "restaurant".
 *
 * @property integer $id_restauracji
 * @property string $nazwa
 * @property integer $id_miasta
 *
 * @property Dish[] $dishes
 * @property City $idMiasta
 */
class Restaurant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'restaurant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazwa', 'id_miasta'], 'required'],
            [['id_miasta'], 'integer'],
            [['nazwa'], 'string', 'max' => 50],
            [['id_miasta'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['id_miasta' => 'id_miasta']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_restauracji' => 'Id Restauracji',
            'nazwa' => 'Nazwa',
            'id_miasta' => 'Id Miasta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDishes()
    {
        return $this->hasMany(Dish::className(), ['id_restauracji' => 'id_restauracji']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMiasta()
    {
        return $this->hasOne(City::className(), ['id_miasta' => 'id_miasta']);
    }
}

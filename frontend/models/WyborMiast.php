<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wybor_miast".
 *
 * @property integer $id_miasta
 * @property string $miasto
 *
 * @property Restauracje[] $restauracjes
 */
class WyborMiast extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wybor_miast';
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
    public function getRestauracjes()
    {
        return $this->hasMany(Restauracje::className(), ['id_miasta' => 'id_miasta']);
    }

    /**
     * @inheritdoc
     * @return WyborMiastQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WyborMiastQuery(get_called_class());
    }
}

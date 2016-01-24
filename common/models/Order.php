<?php

namespace common\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id_order
 * @property integer $id_usera
 * @property string $wartosc
 * @property string $data
 *
 * @property User $idUsera
 * @property OrderDetail[] $orderDetails
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
            [['id_usera', 'wartosc', 'data'], 'required'],
            [['id_usera'], 'integer'],
            [['wartosc'], 'number'],
            [['data'], 'string', 'max' => 10],
            [['id_usera'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_usera' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_order' => 'Id Order',
            'id_usera' => 'Id Usera',
            'wartosc' => 'Wartosc',
            'data' => 'Data',
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
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['id_order' => 'id_order']);
    }

    /**
     * @inheritdoc
     * @return \backend\models\OrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\OrderQuery(get_called_class());
    }
    
        public static function email()
    {

        $email=Yii::$app->user->identity->email;
            if ($email) {
        return 
                Yii:: $app ->mailer->compose( 'zam-html')
                //  Yii::$app->mailer->compose(['html' => 'zam-html', 'logo' => Yii::getAlias('@app/web/images/logo.png')])
                ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                ->setTo($email)
                ->setSubject('Potwierdzenie otrzymania zamówienia.')
                ->send();  
                    }     
else
        return false;
    }
}

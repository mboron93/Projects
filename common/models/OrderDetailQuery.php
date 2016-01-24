<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[order_detail]].
 *
 * @see order_detail
 */
class OrderDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return order_detail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return order_detail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

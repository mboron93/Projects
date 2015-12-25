<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\common\models\Dish]].
 *
 * @see \common\models\Dish
 */
class DishQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Dish[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Dish|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[\common\models\Detail]].
 *
 * @see \common\models\Detail
 */
class DetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \common\models\Detail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\Detail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

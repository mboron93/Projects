<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\City;

/**
 * Cityserach represents the model behind the search form about `common\models\City`.
 */
class Cityserach extends City
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_miasta'], 'integer'],
            [['miasto'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = City::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_miasta' => $this->id_miasta,
        ]);

        $query->andFilterWhere(['like', 'miasto', $this->miasto]);

        return $dataProvider;
    }
}

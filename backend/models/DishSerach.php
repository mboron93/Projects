<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Dish;

/**
 * DishSerach represents the model behind the search form about `common\models\Dish`.
 */
class DishSerach extends Dish
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_dania', 'id_restauracji'], 'integer'],
            [['nazwa_dania', 'opis', 'rodzaj'], 'safe'],
            [['koszt_dania'], 'number'],
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
        $query = Dish::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_dania' => $this->id_dania,
            'koszt_dania' => $this->koszt_dania,
            'id_restauracji' => $this->id_restauracji,
        ]);

        $query->andFilterWhere(['like', 'nazwa_dania', $this->nazwa_dania])
            ->andFilterWhere(['like', 'opis', $this->opis])
            ->andFilterWhere(['like', 'rodzaj', $this->rodzaj]);

        return $dataProvider;
    }
}

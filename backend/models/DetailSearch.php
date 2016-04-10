<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Detail;

/**
 * DetailSearch represents the model behind the search form about `common\models\Detail`.
 */
class DetailSearch extends Detail
{
    /**
     * @inheritdoc
     */
  public function rules()
    {
        return [
            [['id_or_detail', 'id_order', 'id_dania', 'porcja', 'ilosc', 'telefon'], 'integer'],
            [['cena'], 'number'],
            [['ulica', 'miasto'], 'safe'],
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
        $query = \common\models\order_detail::find();

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
            'id_or_detail' => $this->id_or_detail,
            'id_order' => $this->id_order,
            'id_dania' => $this->id_dania,
            'porcja' => $this->porcja,
            'ilosc' => $this->ilosc,
            'cena' => $this->cena,
            'telefon' => $this->telefon,
        ]);

        $query->andFilterWhere(['like', 'ulica', $this->ulica])
            ->andFilterWhere(['like', 'miasto', $this->miasto]);

        return $dataProvider;
    }
}

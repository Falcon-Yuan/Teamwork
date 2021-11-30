<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tokyomedal;

/**
 * TokyomedalSearch represents the model behind the search form of `app\models\Tokyomedal`.
 */
class TokyomedalSearch extends Tokyomedal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country','rank_by_gold', 'gold_medal', 'silver_medal', 'bronze_medal', 'medal_total', 'rank_by_medal', 'country_id','country_code'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tokyomedal::find();

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

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'rank_by_gold', $this->rank_by_gold])
            ->andFilterWhere(['like', 'gold_medal', $this->gold_medal])
            ->andFilterWhere(['like', 'silver_medal', $this->silver_medal])
            ->andFilterWhere(['like', 'bronze_medal', $this->bronze_medal])
            ->andFilterWhere(['like', 'medal_total', $this->medal_total])
            ->andFilterWhere(['like', 'rank_by_medal', $this->rank_by_medal])
            ->andFilterWhere(['like', 'country_id', $this->country_id])
            ->andFilterWhere(['like', 'country_code', $this->country_code]);

        return $dataProvider;
    }
}

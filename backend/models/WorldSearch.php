<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\World;

/**
 * WorldSearch represents the model behind the search form of `backend\models\World`.
 */
class WorldSearch extends World
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rank_by_gold', 'gold_medal', 'silver_medal', 'bronze_medal', 'medal_total', 'rank_by_medal', 'country_id'], 'integer'],
            [['country', 'country_code'], 'safe'],
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
        $query = World::find();

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
            'rank_by_gold' => $this->rank_by_gold,
            'gold_medal' => $this->gold_medal,
            'silver_medal' => $this->silver_medal,
            'bronze_medal' => $this->bronze_medal,
            'medal_total' => $this->medal_total,
            'rank_by_medal' => $this->rank_by_medal,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'country_code', $this->country_code]);

        return $dataProvider;
    }
}

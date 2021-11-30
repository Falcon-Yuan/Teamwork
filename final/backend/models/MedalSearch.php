<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Medal;

/**
 * MedalSearch represents the model behind the search form of `backend\models\Medal`.
 */
class MedalSearch extends Medal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'sport', 'medal_number'], 'safe'],
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
        $query = Medal::find();

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
            ->andFilterWhere(['like', 'sport', $this->sport])
            ->andFilterWhere(['like', 'medal_number', $this->medal_number]);

        return $dataProvider;
    }
}

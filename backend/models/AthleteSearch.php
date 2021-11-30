<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Athlete;

/**
 * AthleteSearch represents the model behind the search form of `backend\models\Athlete`.
 */
class AthleteSearch extends Athlete
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'athlete'], 'safe'],
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
        $query = Athlete::find();

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
            ->andFilterWhere(['like', 'athlete', $this->athlete]);

        return $dataProvider;
    }
}

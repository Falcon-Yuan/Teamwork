<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Olympicsponsor;

/**
 * OlympicsponsorSearch represents the model behind the search form of `app\models\Olympicsponsor`.
 */
class OlympicsponsorSearch extends Olympicsponsor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['公司名称', '赞助类别', '企业简介', '与国际奥委会交集'], 'safe'],
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
        $query = Olympicsponsor::find();

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
        $query->andFilterWhere(['like', '公司名称', $this->公司名称])
            ->andFilterWhere(['like', '赞助类别', $this->赞助类别])
            ->andFilterWhere(['like', '企业简介', $this->企业简介])
            ->andFilterWhere(['like', '与国际奥委会交集', $this->与国际奥委会交集]);

        return $dataProvider;
    }
}

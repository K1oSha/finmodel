<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sort as SortModel;

/**
 * Sort represents the model behind the search form of `app\models\Sort`.
 */
class Sort extends SortModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'сultura_id', 'profit'], 'integer'],
            [['name', 'plus', 'minus', 'tovarnost', 'time_grow', 'lejcost', 'area_number'], 'safe'],
            [['price'], 'number'],
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
        $query = SortModel::find();

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
            'id' => $this->id,
            'сultura_id' => $this->сultura_id,
            'profit' => $this->profit,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'plus', $this->plus])
            ->andFilterWhere(['like', 'minus', $this->minus])
            ->andFilterWhere(['like', 'tovarnost', $this->tovarnost])
            ->andFilterWhere(['like', 'time_grow', $this->time_grow])
            ->andFilterWhere(['like', 'lejcost', $this->lejcost])
            ->andFilterWhere(['like', 'area_number', $this->area_number]);

        return $dataProvider;
    }
}

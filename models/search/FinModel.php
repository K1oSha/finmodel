<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FinModel as FinModelModel;

/**
 * FinModel represents the model behind the search form of `app\models\FinModel`.
 */
class FinModel extends FinModelModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sort_id', 'electro_price', 'water_price'], 'integer'],
            [['name', 'descriprion', 'price_culture'], 'safe'],
            [['area', 'area_house'], 'number'],
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
        $query = FinModelModel::find();

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
            'sort_id' => $this->sort_id,
            'area' => $this->area,
            'area_house' => $this->area_house,
            'electro_price' => $this->electro_price,
            'water_price' => $this->water_price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'descriprion', $this->descriprion])
            ->andFilterWhere(['like', 'price_culture', $this->price_culture]);

        return $dataProvider;
    }
}

<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Texnika as TexnikaModel;

/**
 * Texnika represents the model behind the search form of `app\models\Texnika`.
 */
class Texnika extends TexnikaModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'integer'],
            [['texnikacol', 'price'], 'safe'],
            [['toplivo', 'norma'], 'number'],
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
        $query = TexnikaModel::find();

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
            'name' => $this->name,
            'toplivo' => $this->toplivo,
            'norma' => $this->norma,
        ]);

        $query->andFilterWhere(['like', 'texnikacol', $this->texnikacol])
            ->andFilterWhere(['like', 'price', $this->price]);

        return $dataProvider;
    }
}

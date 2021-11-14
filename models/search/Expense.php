<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Expense as ExpenseModel;

/**
 * Expense represents the model behind the search form of `app\models\Expense`.
 */
class Expense extends ExpenseModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'texnika_id', 'fin_model_id', 'in_stock'], 'integer'],
            [['name'], 'safe'],
            [['exp_1', 'prib_1', 'price', 'exp_2', 'prib_2', 'exp_3', 'prib_3', 'exp_4', 'prib_4', 'prib_5', 'exp_5', 'prib_6', 'exp_6', 'exp_7', 'prib_7', 'exp_8', 'prib_8', 'exp_9', 'prib_9', 'exp_10', 'prib_10', 'exp_11', 'prib_11', 'prib_12', 'exp_12'], 'number'],
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
        $query = ExpenseModel::find();

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
            'texnika_id' => $this->texnika_id,
            'fin_model_id' => $this->fin_model_id,
            'exp_1' => $this->exp_1,
            'prib_1' => $this->prib_1,
            'price' => $this->price,
            'exp_2' => $this->exp_2,
            'prib_2' => $this->prib_2,
            'exp_3' => $this->exp_3,
            'prib_3' => $this->prib_3,
            'exp_4' => $this->exp_4,
            'prib_4' => $this->prib_4,
            'prib_5' => $this->prib_5,
            'exp_5' => $this->exp_5,
            'prib_6' => $this->prib_6,
            'exp_6' => $this->exp_6,
            'exp_7' => $this->exp_7,
            'prib_7' => $this->prib_7,
            'exp_8' => $this->exp_8,
            'prib_8' => $this->prib_8,
            'exp_9' => $this->exp_9,
            'prib_9' => $this->prib_9,
            'exp_10' => $this->exp_10,
            'prib_10' => $this->prib_10,
            'exp_11' => $this->exp_11,
            'prib_11' => $this->prib_11,
            'prib_12' => $this->prib_12,
            'exp_12' => $this->exp_12,
            'in_stock' => $this->in_stock,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}

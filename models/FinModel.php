<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_model".
 *
 * @property int $id
 * @property int $sort_id
 * @property string $name
 * @property string|null $descriprion
 * @property float $area
 * @property float $area_house
 * @property int $electro_price
 * @property int $water_price
 * @property string $price_culture
 * @property float $exp_1
 * @property float $prib_1
 * @property float $price
 * @property float $exp_2
 * @property float $prib_2
 * @property float $exp_3
 * @property float $prib_3
 * @property float $exp_4
 * @property float $prib_4
 * @property float $prib_5
 * @property float $exp_5
 * @property float $prib_6
 * @property float $exp_6
 * @property float $exp_7
 * @property float $prib_7
 * @property float $exp_8
 * @property float $prib_8
 * @property float $exp_9
 * @property float $prib_9
 * @property float $exp_10
 * @property float $prib_10
 * @property float $exp_11
 * @property float $prib_11
 * @property float $prib_12
 * @property float $exp_12
 *
 * @property Expense[] $expenses
 * @property Sort $sort
 */
class FinModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fin_model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort_id', 'name', 'area', 'electro_price', 'water_price'], 'required'],
            [['sort_id', 'electro_price', 'water_price'], 'integer'],
            [['area', 'area_house', 'exp_1', 'prib_1', 'price', 'exp_2', 'prib_2', 'exp_3', 'prib_3', 'exp_4', 'prib_4', 'prib_5', 'exp_5', 'prib_6', 'exp_6', 'exp_7', 'prib_7', 'exp_8', 'prib_8', 'exp_9', 'prib_9', 'exp_10', 'prib_10', 'exp_11', 'prib_11', 'prib_12', 'exp_12'], 'number'],
            [['name', 'price_culture'], 'string', 'max' => 45],
            [['descriprion'], 'string', 'max' => 255],
            [['sort_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sort::className(), 'targetAttribute' => ['sort_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sort_id' => 'Сорт',
            'name' => 'Наименование фин. модели',
            'descriprion' => 'Описание фин. модели',
            'area' => 'Общая посевная площадь (га)',
            'area_house' => 'Area House',
            'electro_price' => 'Стоимость электоэнергии кВт/ч (руб.)',
            'water_price' => 'Стоимость воды м3 (руб.)',
            'price_culture' => 'Price Culture',
            'exp_1' => 'Exp 1',
            'prib_1' => 'Prib 1',
            'price' => 'Price',
            'exp_2' => 'Exp 2',
            'prib_2' => 'Prib 2',
            'exp_3' => 'Exp 3',
            'prib_3' => 'Prib 3',
            'exp_4' => 'Exp 4',
            'prib_4' => 'Prib 4',
            'prib_5' => 'Prib 5',
            'exp_5' => 'Exp 5',
            'prib_6' => 'Prib 6',
            'exp_6' => 'Exp 6',
            'exp_7' => 'Exp 7',
            'prib_7' => 'Prib 7',
            'exp_8' => 'Exp 8',
            'prib_8' => 'Prib 8',
            'exp_9' => 'Exp 9',
            'prib_9' => 'Prib 9',
            'exp_10' => 'Exp 10',
            'prib_10' => 'Prib 10',
            'exp_11' => 'Exp 11',
            'prib_11' => 'Prib 11',
            'prib_12' => 'Prib 12',
            'exp_12' => 'Exp 12',
        ];
    }

    /**
     * Gets query for [[Expenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasMany(Expense::className(), ['fin_model_id' => 'id']);
    }

    /**
     * Gets query for [[Sort]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSort()
    {
        return $this->hasOne(Sort::className(), ['id' => 'sort_id']);
    }
}

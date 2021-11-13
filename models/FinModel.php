<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fin_model".
 *
 * @property int $id
 * @property int $sort_id
 * @property string $name
 * @property string $descriprion
 * @property float $area
 * @property float $area_house
 * @property int $electro_price
 * @property int $water_price
 * @property string $price_culture
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
            [['sort_id', 'name', 'descriprion', 'area', 'area_house', 'electro_price', 'water_price', 'price_culture'], 'required'],
            [['sort_id', 'electro_price', 'water_price'], 'integer'],
            [['area', 'area_house'], 'number'],
            [['name', 'descriprion', 'price_culture'], 'string', 'max' => 45],
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
            'sort_id' => 'Sort ID',
            'name' => 'Name',
            'descriprion' => 'Descriprion',
            'area' => 'Area',
            'area_house' => 'Area House',
            'electro_price' => 'Electro Price',
            'water_price' => 'Water Price',
            'price_culture' => 'Price Culture',
        ];
    }

    /**
     * Gets query for [[Expenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasMany(Expense::className(), ['fin_model_idfin_model' => 'id']);
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

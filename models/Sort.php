<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sort".
 *
 * @property int $id
 * @property string $name
 * @property int $сultura_id
 * @property string $plus
 * @property string $minus
 * @property int $profit
 * @property string $tovarnost
 * @property string $time_grow
 * @property string $lejcost
 * @property float $price
 * @property string $area_number
 *
 * @property FinModel[] $finModels
 * @property Cultura $�ultura
 */
class Sort extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sort';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'сultura_id', 'plus', 'minus', 'profit', 'tovarnost', 'time_grow', 'lejcost', 'price', 'area_number'], 'required'],
            [['сultura_id', 'profit'], 'integer'],
            [['price'], 'number'],
            [['name', 'plus', 'minus', 'tovarnost', 'time_grow', 'lejcost', 'area_number'], 'string', 'max' => 45],
            [['сultura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultura::className(), 'targetAttribute' => ['сultura_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'сultura_id' => 'Сultura ID',
            'plus' => 'Plus',
            'minus' => 'Minus',
            'profit' => 'Profit',
            'tovarnost' => 'Tovarnost',
            'time_grow' => 'Time Grow',
            'lejcost' => 'Lejcost',
            'price' => 'Price',
            'area_number' => 'Area Number',
        ];
    }

    /**
     * Gets query for [[FinModels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFinModels()
    {
        return $this->hasMany(FinModel::className(), ['sort_id' => 'id']);
    }

    /**
     * Gets query for [[Сultura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getСultura()
    {
        return $this->hasOne(Cultura::className(), ['id' => 'сultura_id']);
    }
}

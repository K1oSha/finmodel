<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sort".
 *
 * @property int $id
 * @property string $name
 * @property int $cultura_id
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
 * @property Cultura cultura
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
            [['name', 'cultura_id', 'plus', 'minus', 'profit', 'tovarnost', 'time_grow', 'lejcost', 'price', 'area_number'], 'required'],
            [['cultura_id', 'profit'], 'integer'],
            [['price'], 'number'],
            [['name', 'plus', 'minus', 'tovarnost', 'time_grow', 'lejcost', 'area_number'], 'string', 'max' => 45],
            [['cultura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultura::className(), 'targetAttribute' => ['cultura_id' => 'id']],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'cultura_id' => 'Наименование культуры',
            'plus' => 'Преимущества',
            'minus' => 'Недостатки',
            'profit' => 'Урожайность (ц/га)',
            'tovarnost' => 'Товарность (%)',
            'time_grow' => 'Длительность цикла (дней)',
            'lejcost' => 'Лежкость (%)',
            'price' => 'Стоимость (руб)',
            'area_number' => 'Регионы допуска',
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
     * Gets query for [[cultura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCultura()
    {
        return $this->hasOne(Cultura::className(), ['id' => 'cultura_id']);
    }
}

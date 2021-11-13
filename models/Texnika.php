<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "texnika".
 *
 * @property int $id
 * @property int $name
 * @property string $texnikacol
 * @property float $toplivo
 * @property float $norma
 * @property string $price
 *
 * @property Expense[] $expenses
 */
class Texnika extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'texnika';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'toplivo', 'norma', 'price'], 'required'],
            [['name'], 'integer'],
            [['toplivo', 'norma'], 'number'],
            [['price'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'toplivo' => 'Расход ГСМ на 100 км',
            'norma' => 'Норма выроботки',
            'price' => 'Стоимость',
        ];
    }

    /**
     * Gets query for [[Expenses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpenses()
    {
        return $this->hasMany(Expense::className(), ['texnika_id' => 'id']);
    }
}

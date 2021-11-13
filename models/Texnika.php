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
            [['name', 'texnikacol', 'toplivo', 'norma', 'price'], 'required'],
            [['name'], 'integer'],
            [['toplivo', 'norma'], 'number'],
            [['texnikacol', 'price'], 'string', 'max' => 45],
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
            'texnikacol' => 'Texnikacol',
            'toplivo' => 'Toplivo',
            'norma' => 'Norma',
            'price' => 'Price',
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

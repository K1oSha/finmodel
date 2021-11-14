<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expense".
 *
 * @property int $id
 * @property string $name
 * @property int $texnika_id
 * @property int $fin_model_id
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
 * @property int $in_stock
 *
 * @property FinModel $finModel
 * @property Texnika $texnika
 */
class Expense extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expense';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'fin_model_id', 'price'], 'required'],
            [['texnika_id', 'fin_model_id', 'in_stock'], 'integer'],
            [['exp_1', 'prib_1', 'price', 'exp_2', 'prib_2', 'exp_3', 'prib_3', 'exp_4', 'prib_4', 'prib_5', 'exp_5', 'prib_6', 'exp_6', 'exp_7', 'prib_7', 'exp_8', 'prib_8', 'exp_9', 'prib_9', 'exp_10', 'prib_10', 'exp_11', 'prib_11', 'prib_12', 'exp_12'], 'number'],
            [['name'], 'string', 'max' => 45],
            [['fin_model_id'], 'exist', 'skipOnError' => true, 'targetClass' => FinModel::className(), 'targetAttribute' => ['fin_model_id' => 'id']],
            [['texnika_id'], 'exist', 'skipOnError' => true, 'targetClass' => Texnika::className(), 'targetAttribute' => ['texnika_id' => 'id']],
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
            'texnika_id' => 'Texnika ID',
            'fin_model_id' => 'Fin Model ID',
            'exp_1' => 'План Месяц 1',
            'prib_1' => 'Факт Месяц 1',
            'price' => 'Стоимость покупки',
            'exp_2' => 'План Месяц 2',
            'prib_2' => 'Факт Месяц 2',
            'exp_3' => 'План Месяц 3',
            'prib_3' => 'Факт Месяц 3',
            'exp_4' => 'План Месяц 4',
            'prib_4' => 'Факт Месяц 4',
            'prib_5' => 'Факт Месяц 5',
            'exp_5' => 'План Месяц 5',
            'prib_6' => 'Факт Месяц 6',
            'exp_6' => 'План Месяц 6',
            'exp_7' => 'План Месяц 7',
            'prib_7' => 'Факт Месяц 7',
            'exp_8' => 'План Месяц 8',
            'prib_8' => 'Факт Месяц 8',
            'exp_9' => 'План Месяц 9',
            'prib_9' => 'Факт Месяц 9',
            'exp_10' => 'План Месяц 10',
            'prib_10' => 'Факт Месяц 10',
            'exp_11' => 'План Месяц 11',
            'prib_11' => 'Факт Месяц 11',
            'prib_12' => 'Факт Месяц 12',
            'exp_12' => 'План Месяц12',
            'in_stock' => 'Имеется в наличии',
        ];
    }

    /**
     * Gets query for [[FinModel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFinModel()
    {
        return $this->hasOne(FinModel::className(), ['id' => 'fin_model_id']);
    }

    /**
     * Gets query for [[Texnika]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTexnika()
    {
        return $this->hasOne(Texnika::className(), ['id' => 'texnika_id']);
    }
}

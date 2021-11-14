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
            [['name', 'texnika_id', 'fin_model_id', 'price'], 'required'],
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
            'name' => 'Name',
            'texnika_id' => 'Texnika ID',
            'fin_model_id' => 'Fin Model ID',
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
            'in_stock' => 'In Stock',
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

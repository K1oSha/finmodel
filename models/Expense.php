<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expense".
 *
 * @property int $id
 * @property string $name
 * @property int $texnika_id
 * @property string $expensecol
 * @property int $fin_model_idfin_model
 * @property float $1_exp
 * @property float $1_prib
 * @property float $price
 * @property float $2_exp
 * @property float $2_prib
 * @property float $3_exp
 * @property float $3_prib
 * @property float $4_exp
 * @property float $4_prib
 * @property float $5_prib
 * @property float $5_exp
 * @property float $6_prib
 * @property float $6_exp
 * @property float $7_exp
 * @property float $7_prib
 * @property float $8_exp
 * @property float $8_prib
 * @property float $9_exp
 * @property float $9_prib
 * @property float $10_exp
 * @property float $10_prib
 * @property float $11_exp
 * @property float $11_prib
 * @property float $12_prib
 * @property float $12_exp
 *
 * @property FinModel $finModelIdfinModel
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
            [['name', 'texnika_id', 'expensecol', 'fin_model_idfin_model', 'price'], 'required'],
            [['texnika_id', 'fin_model_idfin_model'], 'integer'],
            [['1_exp', '1_prib', 'price', '2_exp', '2_prib', '3_exp', '3_prib', '4_exp', '4_prib', '5_prib', '5_exp', '6_prib', '6_exp', '7_exp', '7_prib', '8_exp', '8_prib', '9_exp', '9_prib', '10_exp', '10_prib', '11_exp', '11_prib', '12_prib', '12_exp'], 'number'],
            [['name', 'expensecol'], 'string', 'max' => 45],
            [['fin_model_idfin_model'], 'exist', 'skipOnError' => true, 'targetClass' => FinModel::className(), 'targetAttribute' => ['fin_model_idfin_model' => 'id']],
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
            'expensecol' => 'Expensecol',
            'fin_model_idfin_model' => 'Fin Model Idfin Model',
            '1_exp' => '1 Exp',
            '1_prib' => '1 Prib',
            'price' => 'Price',
            '2_exp' => '2 Exp',
            '2_prib' => '2 Prib',
            '3_exp' => '3 Exp',
            '3_prib' => '3 Prib',
            '4_exp' => '4 Exp',
            '4_prib' => '4 Prib',
            '5_prib' => '5 Prib',
            '5_exp' => '5 Exp',
            '6_prib' => '6 Prib',
            '6_exp' => '6 Exp',
            '7_exp' => '7 Exp',
            '7_prib' => '7 Prib',
            '8_exp' => '8 Exp',
            '8_prib' => '8 Prib',
            '9_exp' => '9 Exp',
            '9_prib' => '9 Prib',
            '10_exp' => '10 exp',
            '10_prib' => '10 prib',
            '11_exp' => '11 Exp',
            '11_prib' => '11 Prib',
            '12_prib' => '12 Prib',
            '12_exp' => '12 Exp',
        ];
    }

    /**
     * Gets query for [[FinModelIdfinModel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFinModelIdfinModel()
    {
        return $this->hasOne(FinModel::className(), ['id' => 'fin_model_idfin_model']);
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

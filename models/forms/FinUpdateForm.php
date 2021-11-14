<?php

namespace app\models\forms;

use Yii;
use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read Contractor|null $user This property is read-only.
 *
 */
class FinUpdateForm extends ActiveRecord
{
    public $exp_1;
    public $prib_1;
    public $price;
    public $exp_2;
    public $prib_2;
    public $exp_3;
    public $prib_3;
    public $exp_4;
    public $prib_4;
    public $prib_5;
    public $exp_5;
    public $prib_6;
    public $exp_6;
    public $exp_7;
    public $prib_7;
    public $exp_8;
    public $prib_8;
    public $exp_9;
    public $prib_9;
    public $exp_10;
    public $prib_10;
    public $exp_11;
    public $prib_11;
    public $prib_12;
    public $exp_12;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
        ];
    }

    public function attributePlaceholders()
    {
        return [
            'region_id' => 'Выберите регион',
            'area_id' => 'Выберите административный район',
            'cultura_id' => 'Выберите сельскохозяйственную культуру',
        ];
    }

    public function attributeLabels()
    {
        return [
            'exp_1' => 'План Месяц 1',
            'prib_1' => 'Факт Месяц 1',
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
            'exp_12' => 'План Месяц 12',
        ];
    }
}
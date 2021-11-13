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
class FinModelForm extends ActiveRecord
{
    public $region_id;
    public $area_id;
    public $cultura_id;
    public $is_greenhouse;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['region_id', 'area_id', 'cultura_id'], 'required'],
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
            'region_id' => 'Регион',
            'area_id' => 'Район посева',
            'cultura_id' => 'Сельскохозяйственная культура',
            'is_greenhouse' => 'Используется теплица',
        ];
    }
}
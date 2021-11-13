<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "cultura".
 *
 * @property int $id
 * @property string $name
 *
 * @property Area[] $areas
 * @property Sort[] $sorts
 */
class Cultura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cultura';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
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
        ];
    }

    /**
     * Gets query for [[Areas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAreas()
    {
        return $this->hasMany(Area::className(), ['cultura_id' => 'id']);
    }

    /**
     * Gets query for [[Sorts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorts()
    {
        return $this->hasMany(Sort::className(), ['cultura_id' => 'id']);
    }

    public static function getCultures()
    {
        return  ArrayHelper::map(self::find()->all(),'id','name');
    }
}

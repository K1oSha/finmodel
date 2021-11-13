<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string|null $name
 * @property int $region_id
 * @property string|null $recomended_culture
 * @property int $cultura_id
 *
 * @property Cultura $cultura
 * @property Region $region
 */
class Area extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'cultura_id'], 'required'],
            [['region_id', 'cultura_id'], 'integer'],
            [['name', 'recomended_culture'], 'string', 'max' => 45],
            [['cultura_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cultura::className(), 'targetAttribute' => ['cultura_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'region_id' => 'Region ID',
            'recomended_culture' => 'Recomended Culture',
            'cultura_id' => 'Cultura ID',
        ];
    }

    /**
     * Gets query for [[Cultura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCultura()
    {
        return $this->hasOne(Cultura::className(), ['id' => 'cultura_id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}

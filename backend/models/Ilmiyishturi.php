<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ilmiyishturi".
 *
 * @property int $id
 * @property string $name
 *
 * @property Ilimiyishlar[] $ilimiyishlars
 */
class Ilmiyishturi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ilmiyishturi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Ilimiyishlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIlimiyishlars()
    {
        return $this->hasMany(Ilimiyishlar::className(), ['ilimiyishlar_turi_id' => 'id']);
    }
}

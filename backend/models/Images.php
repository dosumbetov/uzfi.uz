<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property string|null $img
 *
 * @property Rektorat[] $rektorats
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[Rektorats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRektorats()
    {
        return $this->hasMany(Rektorat::className(), ['image_id' => 'id']);
    }
}

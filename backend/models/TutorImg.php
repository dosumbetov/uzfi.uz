<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tutor_img".
 *
 * @property int $id
 * @property string|null $img
 *
 * @property TutorInfo[] $tutorInfos
 */
class TutorImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tutor_img';
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
     * Gets query for [[TutorInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTutorInfos()
    {
        return $this->hasMany(TutorInfo::className(), ['tutor_img_id' => 'id']);
    }
}

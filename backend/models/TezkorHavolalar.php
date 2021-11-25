<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tezkor_havolalar".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $height
 * @property string $width
 * @property int $link_type
 * @property string $link
 * @property int|null $img
 */
class TezkorHavolalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tezkor_havolalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'height', 'width', 'link_type', 'link'], 'required'],
            [['link_type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'height', 'width', 'link', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'height' => 'Height',
            'width' => 'Width',
            'link_type' => 'Link Type',
            'link' => 'Link',
            'img' => 'Img',
        ];
    }
}

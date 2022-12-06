<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ilimiyishlar".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $published_place_uz
 * @property string $published_place_ru
 * @property string $published_place_en
 * @property string $date
 * @property int $ilimiyishlar_rek_id
 * @property int $ilimiyishlar_turi_id
 *
 * @property Rektorat $ilimiyishlarRek
 * @property Ilmiyishturi $ilimiyishlarTuri
 */
class Ilimiyishlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ilimiyishlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'published_place_uz', 'published_place_ru', 'published_place_en', 'date', 'ilimiyishlar_rek_id', 'ilimiyishlar_turi_id'], 'required'],
            [['ilimiyishlar_rek_id', 'ilimiyishlar_turi_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'published_place_uz', 'published_place_ru', 'published_place_en', 'date'], 'string', 'max' => 255],
            [['ilimiyishlar_turi_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ilmiyishturi::className(), 'targetAttribute' => ['ilimiyishlar_turi_id' => 'id']],
            [['ilimiyishlar_rek_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rektorat::className(), 'targetAttribute' => ['ilimiyishlar_rek_id' => 'id']],
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
            'published_place_uz' => 'Published Place Uz',
            'published_place_ru' => 'Published Place Ru',
            'published_place_en' => 'Published Place En',
            'date' => 'Date',
            'ilimiyishlar_rek_id' => 'Ilimiyishlar Rek ID',
            'ilimiyishlar_turi_id' => 'Ilimiyishlar Turi ID',
        ];
    }

    /**
     * Gets query for [[IlimiyishlarRek]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIlimiyishlarRek()
    {
        return $this->hasOne(Rektorat::className(), ['id' => 'ilimiyishlar_rek_id']);
    }

    /**
     * Gets query for [[IlimiyishlarTuri]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIlimiyishlarTuri()
    {
        return $this->hasOne(Ilmiyishturi::className(), ['id' => 'ilimiyishlar_turi_id']);
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $article_degree_uz
 * @property string $article_degree_ru
 * @property string $article_degree_en
 * @property string $date
 * @property int $art_fak_staf_id
 * @property int $number
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'article_degree_uz', 'article_degree_ru', 'article_degree_en', 'date', 'art_fak_staf_id', 'number'], 'required'],
            [['art_fak_staf_id', 'number'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'article_degree_uz', 'article_degree_ru', 'article_degree_en', 'date'], 'string', 'max' => 255],
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
            'article_degree_uz' => 'Article Degree Uz',
            'article_degree_ru' => 'Article Degree Ru',
            'article_degree_en' => 'Article Degree En',
            'date' => 'Date',
            'art_fak_staf_id' => 'Art Fak Staf ID',
            'number' => 'Number',
        ];
    }
}

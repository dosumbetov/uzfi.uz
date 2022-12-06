<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rektorat".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $lavozim_uz
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $qabul_vaqti_uz
 * @property string $qabul_vaqti_ru
 * @property string $qabul_vaqti_en
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $telegram
 * @property string $manzil_uz
 * @property string $manzil_ru
 * @property string $manzil_en
 * @property string $vazifasi_uz
 * @property string $vazifasi_ru
 * @property string $vazifasi_en
 * @property int $rek_menu_sub_id
 * @property string $tarjimaiyhol_uz
 * @property string $tarjimaiyhol_ru
 * @property string $tarjimaiyhol_en
 * @property int $image_id
 *
 * @property Ilimiyishlar[] $ilimiyishlars
 * @property Images $image
 * @property MenuSub $rekMenuSub
 */
class Rektorat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rektorat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'qabul_vaqti_uz', 'qabul_vaqti_ru', 'qabul_vaqti_en', 'tel', 'fax', 'email', 'telegram', 'manzil_uz', 'manzil_ru', 'manzil_en', 'vazifasi_uz', 'vazifasi_ru', 'vazifasi_en', 'tarjimaiyhol_uz', 'tarjimaiyhol_ru', 'tarjimaiyhol_en', 'image_id'], 'required'],
            [['vazifasi_uz', 'vazifasi_ru', 'vazifasi_en', 'tarjimaiyhol_uz', 'tarjimaiyhol_ru', 'tarjimaiyhol_en'], 'string'],
            [['image_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'qabul_vaqti_uz', 'qabul_vaqti_ru', 'qabul_vaqti_en', 'tel', 'fax', 'email', 'telegram', 'manzil_uz', 'manzil_ru', 'manzil_en'], 'string', 'max' => 255],
            [['rek_menu_sub_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuSub::className(), 'targetAttribute' => ['rek_menu_sub_id' => 'id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Images::className(), 'targetAttribute' => ['image_id' => 'id']],
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
            'lavozim_uz' => 'Lavozim Uz',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'qabul_vaqti_uz' => 'Qabul Vaqti Uz',
            'qabul_vaqti_ru' => 'Qabul Vaqti Ru',
            'qabul_vaqti_en' => 'Qabul Vaqti En',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'email' => 'Email',
            'telegram' => 'Telegram',
            'manzil_uz' => 'Manzil Uz',
            'manzil_ru' => 'Manzil Ru',
            'manzil_en' => 'Manzil En',
            'vazifasi_uz' => 'Vazifasi Uz',
            'vazifasi_ru' => 'Vazifasi Ru',
            'vazifasi_en' => 'Vazifasi En',
            'rek_menu_sub_id' => 'Bolim nomi',
            'tarjimaiyhol_uz' => 'Tarjimaiyhol Uz',
            'tarjimaiyhol_ru' => 'Tarjimaiyhol Ru',
            'tarjimaiyhol_en' => 'Tarjimaiyhol En',
            'image_id' => 'Image ID',
        ];
    }

    /**
     * Gets query for [[Ilimiyishlars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIlimiyishlars()
    {
        return $this->hasMany(Ilimiyishlar::className(), ['ilimiyishlar_rek_id' => 'id']);
    }

    /**
     * Gets query for [[Image]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Images::className(), ['id' => 'image_id']);
    }

    /**
     * Gets query for [[RekMenuSub]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRekMenuSub()
    {
        return $this->hasOne(MenuSub::className(), ['id' => 'rek_menu_sub_id']);
    }
}

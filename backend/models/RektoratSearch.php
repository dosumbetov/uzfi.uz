<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rektorat;

/**
 * RektoratSearch represents the model behind the search form of `backend\models\Rektorat`.
 */
class RektoratSearch extends Rektorat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rek_menu_sub_id', 'image_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'lavozim_uz', 'lavozim_ru', 'lavozim_en', 'qabul_vaqti_uz', 'qabul_vaqti_ru', 'qabul_vaqti_en', 'tel', 'fax', 'email', 'telegram', 'manzil_uz', 'manzil_ru', 'manzil_en', 'vazifasi_uz', 'vazifasi_ru', 'vazifasi_en', 'tarjimaiyhol_uz', 'tarjimaiyhol_ru', 'tarjimaiyhol_en'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Rektorat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'rek_menu_sub_id' => $this->rek_menu_sub_id,
            'image_id' => $this->image_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'lavozim_uz', $this->lavozim_uz])
            ->andFilterWhere(['like', 'lavozim_ru', $this->lavozim_ru])
            ->andFilterWhere(['like', 'lavozim_en', $this->lavozim_en])
            ->andFilterWhere(['like', 'qabul_vaqti_uz', $this->qabul_vaqti_uz])
            ->andFilterWhere(['like', 'qabul_vaqti_ru', $this->qabul_vaqti_ru])
            ->andFilterWhere(['like', 'qabul_vaqti_en', $this->qabul_vaqti_en])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'manzil_uz', $this->manzil_uz])
            ->andFilterWhere(['like', 'manzil_ru', $this->manzil_ru])
            ->andFilterWhere(['like', 'manzil_en', $this->manzil_en])
            ->andFilterWhere(['like', 'vazifasi_uz', $this->vazifasi_uz])
            ->andFilterWhere(['like', 'vazifasi_ru', $this->vazifasi_ru])
            ->andFilterWhere(['like', 'vazifasi_en', $this->vazifasi_en])
            ->andFilterWhere(['like', 'tarjimaiyhol_uz', $this->tarjimaiyhol_uz])
            ->andFilterWhere(['like', 'tarjimaiyhol_ru', $this->tarjimaiyhol_ru])
            ->andFilterWhere(['like', 'tarjimaiyhol_en', $this->tarjimaiyhol_en]);

        return $dataProvider;
    }
}

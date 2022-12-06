<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ilimiyishlar;

/**
 * IlimiyishlarSearch represents the model behind the search form of `backend\models\Ilimiyishlar`.
 */
class IlimiyishlarSearch extends Ilimiyishlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ilimiyishlar_rek_id', 'ilimiyishlar_turi_id'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'published_place_uz', 'published_place_ru', 'published_place_en', 'date'], 'safe'],
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
        $query = Ilimiyishlar::find();

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
            'ilimiyishlar_rek_id' => $this->ilimiyishlar_rek_id,
            'ilimiyishlar_turi_id' => $this->ilimiyishlar_turi_id,
        ]);

        $query->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'published_place_uz', $this->published_place_uz])
            ->andFilterWhere(['like', 'published_place_ru', $this->published_place_ru])
            ->andFilterWhere(['like', 'published_place_en', $this->published_place_en])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}

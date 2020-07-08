<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailTagihan;

/**
 * DetailTagihanSearch represents the model behind the search form of `app\models\DetailTagihan`.
 */
class DetailTagihanSearch extends DetailTagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jenis_tagihan', 'kuantitas', 'besar_biaya', 'id_tagihan', 'pot_beastudi', 'pot_lainnya'], 'integer'],
            [['status'], 'safe'],
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
        $query = DetailTagihan::find();

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
            'id_jenis_tagihan' => $this->id_jenis_tagihan,
            'kuantitas' => $this->kuantitas,
            'besar_biaya' => $this->besar_biaya,
            'id_tagihan' => $this->id_tagihan,
            'pot_beastudi' => $this->pot_beastudi,
            'pot_lainnya' => $this->pot_lainnya,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}

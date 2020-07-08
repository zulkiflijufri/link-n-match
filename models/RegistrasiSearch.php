<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registrasi;

/**
 * RegistrasiSearch represents the model behind the search form of `app\models\Registrasi`.
 */
class RegistrasiSearch extends Registrasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'biaya'], 'integer'],
            [['nim', 'nama', 'tanggal'], 'safe'],
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
        $query = Registrasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'nama' => SORT_ASC
                ]
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
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
            'tanggal' => $this->tanggal,
            'biaya' => $this->biaya,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}

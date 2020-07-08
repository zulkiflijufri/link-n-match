<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form of `app\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_semester', 'id_program_pendidikan',  'id_dosen_pa'], 'integer'],
            [['nim', 'nama', 'rombel', 'status_krs', 'status','id_program_studi','id_masa_studi'], 'safe'],
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
        $query = Mahasiswa::find();

        // add conditions that should always apply here
        $query->joinWith('programStudi');
        $query->joinWith('masaStudi');
        $query->joinWith('tagihan');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ]
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
            'id_semester' => $this->id_semester,
            'id_program_pendidikan' => $this->id_program_pendidikan,
            'id_dosen_pa' => $this->id_dosen_pa,
            //'id_program_studi' => $this->id_program_studi,
            //'id_masa_studi' => $this->id_masa_studi,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'rombel', $this->rombel])
            ->andFilterWhere(['like', 'status_krs', $this->status_krs])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'program_studi.nama', $this->id_program_studi])
            ->andFilterWhere(['like', 'masa_studi.nama', $this->id_masa_studi]);

        return $dataProvider;
    }
}

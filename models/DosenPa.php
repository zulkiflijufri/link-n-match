<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen_pa".
 *
 * @property int $id
 * @property string $nama
 * @property string $title
 *
 * @property Mahasiswa[] $mahasiswas
 */
class DosenPa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen_pa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'title'], 'required'],
            [['nama'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Dosen PA',
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_dosen_pa' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrasi".
 *
 * @property int $id
 * @property string|null $nim
 * @property string $nama
 * @property string $tanggal
 * @property int $biaya
 */
class Registrasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registrasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tanggal', 'biaya'], 'required'],
            [['tanggal'], 'safe'],
            [['biaya'], 'integer'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'tanggal' => 'Tanggal',
            'biaya' => 'Biaya',
        ];
    }
}

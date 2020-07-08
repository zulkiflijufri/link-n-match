<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "program_pendidikan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Mahasiswa[] $mahasiswas
 */
class ProgramPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'program_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Program Pendidikan',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_program_pendidikan' => 'id']);
    }
}

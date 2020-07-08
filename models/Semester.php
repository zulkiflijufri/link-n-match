<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "semester".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'semester';
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
            'nama' => 'Semester',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_semester' => 'id']);
    }
}

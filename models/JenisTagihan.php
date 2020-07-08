<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_tagihan".
 *
 * @property int $id
 * @property string $nama
 *
 * @property DetailTagihan[] $detailTagihans
 */
class JenisTagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_tagihan';
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
            'nama' => 'Nama',
        ];
    }

    /**
     * Gets query for [[DetailTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTagihans()
    {
        return $this->hasMany(DetailTagihan::className(), ['id_jenis_tagihan' => 'id']);
    }
}

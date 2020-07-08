<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id
 * @property string $tanggal
 * @property string $nomor_tagihan
 * @property int $id_mahasiswa
 * @property int $subtotal_biaya
 * @property int $terbayar
 * @property int $sisa
 * @property int $tarikan
 *
 * @property DetailTagihan[] $detailTagihans
 * @property Mahasiswa $mahasiswa
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nomor_tagihan', 'id_mahasiswa', 'subtotal_biaya', 'terbayar', 'sisa', 'tarikan'], 'required'],
            [['tanggal'], 'safe'],
            [['id_mahasiswa', 'subtotal_biaya', 'terbayar', 'sisa', 'tarikan'], 'integer'],
            [['nomor_tagihan'], 'string', 'max' => 20],
            [['id_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['id_mahasiswa' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'nomor_tagihan' => 'Nomor Tagihan',
            'id_mahasiswa' => 'Mahasiswa',
            'subtotal_biaya' => 'Subtotal Biaya',
            'terbayar' => 'Terbayar',
            'sisa' => 'Sisa',
            'tarikan' => 'Tarikan',
        ];
    }

    /**
     * Gets query for [[DetailTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTagihans()
    {
        return $this->hasMany(DetailTagihan::className(), ['id_tagihan' => 'id']);
    }

    /**
     * Gets query for [[Mahasiswa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['id' => 'id_mahasiswa']);
    }
}

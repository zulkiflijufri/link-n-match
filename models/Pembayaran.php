<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id
 * @property string $tanggal
 * @property string $nomor_bukti
 * @property int $id_detail_tagihan
 * @property int $besar_pembayaran
 * @property string|null $keterangan
 *
 * @property DetailTagihan $detailTagihan
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal', 'nomor_bukti', 'id_detail_tagihan', 'besar_pembayaran'], 'required'],
            [['tanggal'], 'safe'],
            [['id_detail_tagihan', 'besar_pembayaran'], 'integer'],
            [['nomor_bukti'], 'string', 'max' => 50],
            [['keterangan'], 'string', 'max' => 255],
            [['id_detail_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => DetailTagihan::className(), 'targetAttribute' => ['id_detail_tagihan' => 'id']],
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
            'nama'  => 'Nama',
            'id_detail_tagihan' => 'Nomor Tagihan',
            'nomor_pembayaran' => 'Nomor Pembayaran',
            'besar_pembayaran' => 'Besar Pembayaran',
            'bank'  => 'Bank',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[DetailTagihan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTagihan()
    {
        return $this->hasOne(DetailTagihan::className(), ['id' => 'id_detail_tagihan']);
    }
}

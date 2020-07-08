<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_tagihan".
 *
 * @property int $id
 * @property int $id_jenis_tagihan
 * @property int $kuantitas
 * @property int $besar_biaya
 * @property int $id_tagihan
 * @property int|null $pot_beastudi
 * @property int|null $pot_lainnya
 * @property string $status
 *
 * @property JenisTagihan $jenisTagihan
 * @property Tagihan $tagihan
 * @property Pembayaran[] $pembayarans
 */
class DetailTagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis_tagihan', 'kuantitas', 'besar_biaya', 'id_tagihan', 'status'], 'required'],
            [['id_jenis_tagihan', 'kuantitas', 'besar_biaya', 'id_tagihan', 'pot_beastudi', 'pot_lainnya'], 'integer'],
            [['status'], 'string'],
            [['id_jenis_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => JenisTagihan::className(), 'targetAttribute' => ['id_jenis_tagihan' => 'id']],
            [['id_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => Tagihan::className(), 'targetAttribute' => ['id_tagihan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_jenis_tagihan' => 'Jenis Tagihan',
            'kuantitas' => 'Kuantitas',
            'besar_biaya' => 'Besar Biaya',
            'id_tagihan' => 'Tagihan',
            'pot_beastudi' => 'Pot Beastudi',
            'pot_lainnya' => 'Pot Lainnya',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[JenisTagihan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisTagihan()
    {
        return $this->hasOne(JenisTagihan::className(), ['id' => 'id_jenis_tagihan']);
    }

    /**
     * Gets query for [[Tagihan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihan()
    {
        return $this->hasOne(Tagihan::className(), ['id' => 'id_tagihan']);
    }

    /**
     * Gets query for [[Pembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembayarans()
    {
        return $this->hasMany(Pembayaran::className(), ['id_detail_tagihan' => 'id']);
    }
}

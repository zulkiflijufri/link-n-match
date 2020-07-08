<?php

namespace app\models;

use Yii;
use app\models\Registrasi;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nim
 * @property string $nama
 * @property string $rombel
 * @property int $id_semester
 * @property string $status_krs
 * @property int $id_program_pendidikan
 * @property int $id_program_studi
 * @property int $id_dosen_pa
 * @property int $id_masa_studi
 * @property string $status
 *
 * @property DosenPa $dosenPa
 * @property MasaStudi $masaStudi
 * @property Semester $semester
 * @property ProgramPendidikan $programPendidikan
 * @property ProgramStudi $programStudi
 * @property User $user
 * @property Tagihan[] $tagihans
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'rombel', 'id_semester', 'status_krs', 'id_program_pendidikan', 'id_program_studi', 'id_dosen_pa', 'id_masa_studi', 'status'], 'required'],
            [['id_semester', 'id_program_pendidikan', 'id_program_studi', 'id_dosen_pa', 'id_masa_studi'], 'integer'],
            [['status_krs', 'status'], 'string'],
            [['nim', 'rombel'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 100],
            [['id_dosen_pa'], 'exist', 'skipOnError' => true, 'targetClass' => DosenPa::className(), 'targetAttribute' => ['id_dosen_pa' => 'id']],
            [['id_masa_studi'], 'exist', 'skipOnError' => true, 'targetClass' => MasaStudi::className(), 'targetAttribute' => ['id_masa_studi' => 'id']],
            [['id_semester'], 'exist', 'skipOnError' => true, 'targetClass' => Semester::className(), 'targetAttribute' => ['id_semester' => 'id']],
            [['id_program_pendidikan'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramPendidikan::className(), 'targetAttribute' => ['id_program_pendidikan' => 'id']],
            [['id_program_studi'], 'exist', 'skipOnError' => true, 'targetClass' => ProgramStudi::className(), 'targetAttribute' => ['id_program_studi' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Username',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'rombel' => 'Rombel',
            'id_semester' => 'Semester',
            'status_krs' => 'Status Krs',
            'id_program_pendidikan' => 'Program Pendidikan',
            'id_program_studi' => 'Program Studi',
            'id_dosen_pa' => 'Dosen PA',
            'id_masa_studi' => 'Masa Studi',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[DosenPa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDosenPa()
    {
        return $this->hasOne(DosenPa::className(), ['id' => 'id_dosen_pa']);
    }

    /**
     * Gets query for [[MasaStudi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMasaStudi()
    {
        return $this->hasOne(MasaStudi::className(), ['id' => 'id_masa_studi']);
    }

    /**
     * Gets query for [[Semester]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
        return $this->hasOne(Semester::className(), ['id' => 'id_semester']);
    }

    /**
     * Gets query for [[ProgramPendidikan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgramPendidikan()
    {
        return $this->hasOne(ProgramPendidikan::className(), ['id' => 'id_program_pendidikan']);
    }

    /**
     * Gets query for [[ProgramStudi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProgramStudi()
    {
        return $this->hasOne(ProgramStudi::className(), ['id' => 'id_program_studi']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Tagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTagihans()
    {
        return $this->hasMany(Tagihan::className(), ['id_mahasiswa' => 'id']);
    }
}

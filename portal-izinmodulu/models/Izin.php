<?php


namespace kouosl\izinmodulu\models;

use Yii;

/**
 * This is the model class for table "izin".
 *
 * @property int $izin_id
 * @property string $baslangic_tarihi
 * @property string $bitis_tarihi
 * @property int $onceki_izin_sayisi
 * @property int $ogrenci_TC
 * @property string $ogrenci_adi
 * @property string $ogrenci_soyadi
 * @property string $ogrenci_bolum
 * @property string $ogrenci_mail
 * @property int $ogrenci_telefon
 */
class Izin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['izin_id', 'baslangic_tarihi', 'bitis_tarihi', 'onceki_izin_sayisi', 'ogrenci_TC', 'ogrenci_adi', 'ogrenci_soyadi', 'ogrenci_bolum', 'ogrenci_mail', 'ogrenci_telefon'], 'required'],
            [['izin_id', 'onceki_izin_sayisi', 'ogrenci_TC', 'ogrenci_telefon'], 'integer'],
            [['baslangic_tarihi', 'bitis_tarihi'], 'safe'],
            [['ogrenci_adi', 'ogrenci_soyadi', 'ogrenci_bolum', 'ogrenci_mail'], 'string', 'max' => 50],
            [['izin_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'izin_id' => Yii::t('app', 'Izin ID'),
            'baslangic_tarihi' => Yii::t('app', 'Baslangic Tarihi'),
            'bitis_tarihi' => Yii::t('app', 'Bitis Tarihi'),
            'onceki_izin_sayisi' => Yii::t('app', 'Onceki Izin Sayisi'),
            'ogrenci_TC' => Yii::t('app', 'Ogrenci  Tc'),
            'ogrenci_adi' => Yii::t('app', 'Ogrenci Adi'),
            'ogrenci_soyadi' => Yii::t('app', 'Ogrenci Soyadi'),
            'ogrenci_bolum' => Yii::t('app', 'Ogrenci Bolum'),
            'ogrenci_mail' => Yii::t('app', 'Ogrenci Mail'),
            'ogrenci_telefon' => Yii::t('app', 'Ogrenci Telefon'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return IzinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new IzinQuery(get_called_class());
    }
}

<?php


namespace kouosl\izinmodulu\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Izin;

/**
 * IzinSearch represents the model behind the search form of `frontend\models\Izin`.
 */
class IzinSearch extends Izin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['izin_id', 'onceki_izin_sayisi', 'ogrenci_TC', 'ogrenci_telefon'], 'integer'],
            [['baslangic_tarihi', 'bitis_tarihi', 'ogrenci_adi', 'ogrenci_soyadi', 'ogrenci_bolum', 'ogrenci_mail'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Izin::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'izin_id' => $this->izin_id,
            'baslangic_tarihi' => $this->baslangic_tarihi,
            'bitis_tarihi' => $this->bitis_tarihi,
            'onceki_izin_sayisi' => $this->onceki_izin_sayisi,
            'ogrenci_TC' => $this->ogrenci_TC,
            'ogrenci_telefon' => $this->ogrenci_telefon,
        ]);

        $query->andFilterWhere(['like', 'ogrenci_adi', $this->ogrenci_adi])
            ->andFilterWhere(['like', 'ogrenci_soyadi', $this->ogrenci_soyadi])
            ->andFilterWhere(['like', 'ogrenci_bolum', $this->ogrenci_bolum])
            ->andFilterWhere(['like', 'ogrenci_mail', $this->ogrenci_mail]);

        return $dataProvider;
    }
}

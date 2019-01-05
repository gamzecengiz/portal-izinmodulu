<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IzinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Izins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Izin'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'izin_id',
            'baslangic_tarihi',
            'bitis_tarihi',
            'onceki_izin_sayisi',
            'ogrenci_TC',
            //'ogrenci_adi',
            //'ogrenci_soyadi',
            //'ogrenci_bolum',
            //'ogrenci_mail',
            //'ogrenci_telefon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IzinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'izin_id') ?>

    <?= $form->field($model, 'baslangic_tarihi') ?>

    <?= $form->field($model, 'bitis_tarihi') ?>

    <?= $form->field($model, 'onceki_izin_sayisi') ?>

    <?= $form->field($model, 'ogrenci_TC') ?>

    <?php // echo $form->field($model, 'ogrenci_adi') ?>

    <?php // echo $form->field($model, 'ogrenci_soyadi') ?>

    <?php // echo $form->field($model, 'ogrenci_bolum') ?>

    <?php // echo $form->field($model, 'ogrenci_mail') ?>

    <?php // echo $form->field($model, 'ogrenci_telefon') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

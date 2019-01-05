<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Izin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'izin_id')->textInput() ?>

    <?= $form->field($model, 'baslangic_tarihi')->textInput() ?>

    <?= $form->field($model, 'bitis_tarihi')->textInput() ?>

    <?= $form->field($model, 'onceki_izin_sayisi')->textInput() ?>

    <?= $form->field($model, 'ogrenci_TC')->textInput() ?>

    <?= $form->field($model, 'ogrenci_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrenci_soyadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrenci_bolum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrenci_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogrenci_telefon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

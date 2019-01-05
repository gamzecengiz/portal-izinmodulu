<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Izin */

$this->title = Yii::t('app', 'Update Izin: {name}', [
    'name' => $model->izin_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izin_id, 'url' => ['view', 'id' => $model->izin_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="izin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

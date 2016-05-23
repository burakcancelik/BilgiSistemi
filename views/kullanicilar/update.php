<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Kullanicilar */

$this->title = 'Kullanici Güncelle: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kullanicilar-update">

    <h1><?= Html::encode($this->title) ?></h1>
	<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

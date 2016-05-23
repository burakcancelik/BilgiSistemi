<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Request */

$this->title = 'Istegi Guncelle: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="request-update">

    <h1><?= Html::encode($this->title) ?></h1>
		<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/standartmain.php" class="btn btn-success">Ana Sayfa</a> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

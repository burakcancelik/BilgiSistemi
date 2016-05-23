<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Hocalar */

$this->title = 'Update Hocalar: ' . ' ' . $model->hocaid;
$this->params['breadcrumbs'][] = ['label' => 'Hocalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hocaid, 'url' => ['view', 'id' => $model->hocaid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hocalar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 
</div>

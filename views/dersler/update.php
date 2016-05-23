<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Dersler */

$this->title = 'Update Dersler: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Derslers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dersler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	
	<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 

</div>

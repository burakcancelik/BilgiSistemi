<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Request */

$this->title = 'Istek Olustur';
$this->params['breadcrumbs'][] = ['label' => 'Requests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/standartmain.php" class="btn btn-success">Ana Sayfa</a> 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

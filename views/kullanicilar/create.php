<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Kullanicilar */

$this->title = 'Kullanici Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Kullanicilars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kullanicilar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 

</div>

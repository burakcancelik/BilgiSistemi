<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Hocalar */

$this->title = $model->hocaid;
$this->params['breadcrumbs'][] = ['label' => 'Hocalars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hocalar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hocaid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hocaid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		
		<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'hocaid',
            'hocaadi',
            'dersi',
        ],
    ]) ?>

</div>

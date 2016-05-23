<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\BilgiSistemi\models\HocalarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hocalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hocalar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Hoca Ekle', ['create'], ['class' => 'btn btn-success']) ?>
		<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/adminmain.php" class="btn btn-success">Ana Sayfa</a> 
    </p>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hocaid',
            'hocaadi',
            'dersi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

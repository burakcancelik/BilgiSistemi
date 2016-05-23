<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\BilgiSistemi\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'İstekler';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Istek Olustur', ['create'], ['class' => 'btn btn-success']) ?>
			<a href="http://localhost/advanced/frontend/modules/BilgiSistemi/views/standartmain.php" class="btn btn-success">Ana Sayfa</a> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'hocaadi',
            'message:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\BilgiSistemi\models\Dersler */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dersler-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kredi')->textInput() ?>

    <?= $form->field($model, 'hocaadi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

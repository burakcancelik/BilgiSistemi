<?php

namespace frontend\modules\BilgiSistemi\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
	public function actionForm()
{
    $model = new frontend\modules\BilgiSistemi\models\Useristek();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('form', [
        'model' => $model,
    ]);
}
}

<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class CabinetController extends Controller
{

    public $layout = 'cabinet';

    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAccount()
    {
        $user = Yii::$app->user->getIdentity();
        if ($user->load(Yii::$app->request->post()) && $user->save()) {
            $this->redirect(['account']);
        }
        return $this->render('account', [
            'user' => $user,
        ]);
    }

}

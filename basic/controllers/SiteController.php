<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\RegistrationForm;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function beforeAction($action)
    {
        if ($partner = Yii::$app->request->get('partner')) {
            Yii::$app->response->cookies->add(new \yii\web\Cookie([
                'name' => 'partner',
                'value' => $partner,
                'expire' => time() + 86400 * 365,
                'path' => '/',
            ]));
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegistration()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user = new RegistrationForm();
        if ($user->load(Yii::$app->request->post()) && $user->registration()) {
            return $this->goBack();
        }
        return $this->render('registration', [
            'user' => $user,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user = new LoginForm();
        if ($user->load(Yii::$app->request->post()) && $user->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'user' => $user,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}

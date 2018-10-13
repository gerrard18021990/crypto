<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Аккаунт';
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="content">
        <div class="container-fluid">
            <div class="header text-center"></div>
            <div class="card card-center">
                <div class="card-header card-header-icon" data-background-color="blue"><i class="material-icons">perm_identity</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Персональные настройки</h4>
                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                    ]); ?>
                    <?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-lg pull-right']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
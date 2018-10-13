<?php
$user = Yii::$app->user->getIdentity();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $this->title; ?></title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900|Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/material-dashboard.css"/>
    <link rel="stylesheet" href="https://cryptocoinvest.io/static/tpl/assets/css/bootstrap.min.css"/>
    <script src="https://cryptocoinvest.io/static/tpl/assets/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="white" data-background-color="black"
         data-image="/static/tpl/assets/img/pages/cabinet/fon1.jpg">
        <div class="logo">
            <a href="/"></a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="info">
                    <div class="photo">
                        <a href="/account"><img src="" alt=""></a>
                    </div>
                <span style="color:white">
                    <?= \yii\helpers\Html::a($user->login, ['/cabinet/account']); ?>
                    <br>
                    <a href="/operation?add=CASHIN">
                        <strong> 0.00 $</strong>
                    </a>
                    <a href="/account" class="caret-noicon material-icons">settings</a>
                </span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/cabinet">
                        <i class="material-icons">dashboard</i>
                        <p> Панель управления </p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#balans" class="collapsed" aria-expanded="false">
                        <span class="sidebar-mini">Б</span>
                        <p> Баланс
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="balans" aria-expanded="false" style="height: 0px;">
                        <ul class="nav">
                            <li>
                                <a href="/operation?add=CASHIN">
                                    <span class="sidebar-mini"> П </span>
                                    <span class="sidebar-normal"> Пополнить </span>
                                </a>
                            </li>
                            <li>
                                <a href="/operation?add=CASHOUT">
                                    <span class="sidebar-mini"> В </span>
                                    <span class="sidebar-normal"> Вывести </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">trending_up</i>
                        <p> Инвестиции
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse " id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="/deposit?add">
                                    <span class="sidebar-mini">И</span>
                                    <span class="sidebar-normal">Инвестировать</span>
                                </a>
                            </li>
                            <li>
                                <a href="/deposits">
                                    <span class="sidebar-mini">В</span>
                                    <span class="sidebar-normal">В работе</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/refsys">
                        <i class="material-icons">people</i>
                        <p>Партнеры </p>
                    </a>
                </li>
                <li>
                    <a href="/operations">
                        <i class="material-icons">apps</i>
                        <p> Операции </p>
                    </a>
                </li>
                <li>
                    <a href="/balance/wallets">
                        <i class="material-icons">credit_card</i>
                        <p> Реквизиты </p>
                    </a>
                </li>
                <li class="visible-sm visible-xs">
                    <a href="/login?out">
                        <i class="icon">
                            <svg x="0px" y="0px" width="16px" height="16px" viewBox="0 0 512 512"
                                 style="enable-background:new 0 0 512 512;">
                                <path
                                    d="M176,256H16v-64h160v-64l96,96l-96,96V256z M496,0v416l-192,96v-96H112V288h32v96h160V96l128-64H144v128h-32V0H496z"
                                    fill="#fff"></path>
                            </svg>
                        </i>
                        <p> Выход </p>
                    </a>
                </li>
            </ul>

            <div class="sidebar-partner hidden">
                <img style="" src="/static/cabinet/img/icn/ruble.svg">
                <h4 class="title text-center"><strong>Получайте сверх доход от вкладов друзей</strong></h4>
                <a href="/refsys" class="btn btn-transparent"> Получить ссылку</a>

                <p class="card-description">
                    Отправляйте ссылку друзьям и смотрите как растут Ваши доходы, приятным бонусом Вы получите 8% от их
                    пополнений и начислений, а также пассивный доход с тех, кого пригласят они 2% со второго уровня и 1%
                    с третьего.
                </p>
            </div>

        </div>
        <div class="sidebar-background"
             style="background-image: url(/static/tpl/assets/img/pages/cabinet/fon1.jpg) "></div>
    </div>
    <div class="main-panel">
        <?= $content; ?>
    </div>
</div>
</body>
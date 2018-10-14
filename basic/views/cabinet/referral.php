<div class="content">
    <script>function copyToClipboard(elem) {
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);
            var succeed;
            try {
                succeed = document.execCommand("copy");
                alert('Ваш браузер не поддерживат копирование, скопируйте ссылку вручную');
            } catch (e) {
                succeed = false;
                alert('Ссылка скопирована в буфер обмена.');
            }
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }
            if (isInput) {
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                target.textContent = "";
            }
            return succeed;
        }</script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                <div
                    class="col-lg-10 col-lg-offset-4 col-md-12 col-sm-offset-3 col-sm-12 col-sm-offset-5 col-xs-12 text-center">
                    <img src="images/man.png" class="partner-logo"></div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                    <div class="header text-center">
                        <h3 class="title text-center">Поделись ссылкой с друзьями</h3>
                    </div>
                    <div class="form-group is-empty">
                        <input value="http://site.ru/?partner=<?= $user->login; ?>" class="form-control copy" id="copy"
                               type="text"/>
                        <span class="copy" onclick="copyToClipboard(document.getElementById('copy'));">Копировать</span>
                        <span class="material-input"></span>
                    </div>
                    <p class="card-description text-center parnter-desc">Совершенно бесплатно станьте нашим партнером и
                        получайте дивиденды со вкладов и начислений привлеченных клиентов.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card card-plai row no-margin">
                <div class="col-md-12" data-background-color="light green">
                    <div class="header text-center col-md-8 col-md-offset-2"><h3 class="title text-center c-grey f15">
                            Друзья скажут спасибо. Мы тоже</h3>
                        <p class="card-description text-center c-grey w400 f09">Вам хорошо, а вот ваши друзья до сих пор
                            не знают как получать пассивный доход и ищут по всему интеренету попадаясь на разного рода
                            уловки и теряют свои деньги. Приглашайте друзей к нам. Расскажите, как вы получаете
                            пассивный доход на инвестициях в blockchain технологиии не выходя из дома. А еще мы дарим
                            бонусы вам и друзьям, когда они приходят по вашему приглашению.</p></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 see margintop60">
                        <div class="header"><h4 class="title text-center"><strong>СМОТРИТЕ, КТО ОТКЛИКНУЛСЯ</strong>
                            </h4></div>
                        <div class="card">
                            <div class="card-content"><h4 class="card-title"></h4>
                                <div class="table-responsive">
                                    <table class="table table-hover table-border-top">
                                        <thead>
                                        <tr class="text-blue">
                                            <th>Пользователь</th>
                                            <th>Дата регистрации</th>
                                            <th>Партнерские начисления</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="4" class="text-center text-blue f11"><strong>Уровень 1</strong>
                                            </td>
                                        </tr>
                                        <?php foreach ($user->partners as $partner) { ?>
                                            <tr class="text-blue">
                                                <td><?= $partner->username ?: $partner->login; ?></td>
                                                <td><?= date('d.m.Y', strtotime($partner->create_time)); ?></td>
                                                <td></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan="4" class="text-center text-blue f11"><strong>Уровень 2</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-center">Не хватает данных.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center text-blue f11"><strong>Уровень 3</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-center">Не хватает данных.</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-center text-blue f11"><strong>Уровень 4</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-center">Не хватает данных.</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 ">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card card-pricing card-plain row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="icon" style="margin:35px 0 25px 0;"><img
                                    style="width:100px;height:100px;vertical-align: text-bottom;"
                                    class="material-icons img-responsive" src="images/icons/users.svg"></div>
                            <p class="card-description text-center c-grey">Вы рекомендуете нас друзьям и приглашаете
                                пройти регистрацию по вашей ссылке</p></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card card-pricing card-plain">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="icon" style="margin:35px 0 25px 0;"><img
                                    style="width:100px;height:100px;vertical-align: text-bottom;"
                                    class="material-icons img-responsive" src="images/icons/domain-registration.svg">
                            </div>
                            <p class="card-description text-center c-grey">Друзья приходят по ссылке, делают вклад</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card card-pricing card-plain">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <div class="icon" style="margin:35px 0 25px 0;"><img
                                    style="width:100px;height:100px;vertical-align: text-bottom;"
                                    class="material-icons img-responsive" src="images/icons/discount2.svg"></div>
                            <p class="card-description text-center c-grey">Вы получаете бессрочный бонус со вкладов и
                                начислений привлеченного клиента</p></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-lg-offset-1 col-md-offset-1 col-md-10 col-sm-12 col-xs-12 text-center"></div>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 programm">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card card-pricing card-plain row">
                        <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                            <div class="ref-procent-text">7%</div>
                            <p class="card-description text-center">С начислением и пополнение от приглашенных<strong
                                    class="ref-bold-text"> инвесторов</strong></p></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card card-pricing card-plain">
                        <div class="col-lg-10 offset-lg-1 col-md-10  offset-md-1">
                            <div class="ref-procent-text">4%</div>
                            <p class="card-description text-center">С начислением и пополнение от приглашенных<strong
                                    class="ref-bold-text"> второго</strong> уровня</p></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card card-pricing card-plain">
                        <div class="col-lg-10 offset-lg-1 col-md-10  offset-md-1">
                            <div class="ref-procent-text">2%</div>
                            <p class="card-description text-center">С начислением и пополнение от приглашенных<strong
                                    class="ref-bold-text"> третьего</strong> уровня</p></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="card card-pricing card-plain">
                        <div class="col-lg-10 offset-lg-1 col-md-10  offset-md-1">
                            <div class="ref-procent-text">1%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
</div>
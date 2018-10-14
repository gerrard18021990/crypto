<script src="https://cryptocoinvest.io/static/tpl/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/material.min.js"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/perfect-scrollbar.jquery.min.js"
        type="text/javascript"></script><!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script
    src="https://cryptocoinvest.io/static/tpl/assets/js/moment.min.js"></script><!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cryptocoinvest.io/static/tpl/assets/js/nouislider.min.js"
        type="text/javascript"></script><!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="https://cryptocoinvest.io/static/tpl/assets/js/bootstrap-datetimepicker.js"
        type="text/javascript"></script><!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="https://cryptocoinvest.io/static/tpl/assets/js/bootstrap-selectpicker.js"
        type="text/javascript"></script><!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script
    src="https://cryptocoinvest.io/static/tpl/assets/js/bootstrap-tagsinput.js"></script><!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script
    src="https://cryptocoinvest.io/static/tpl/assets/js/jasny-bootstrap.min.js"></script><!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
<script src="https://cryptocoinvest.io/static/tpl/assets/js/atv-img-animation.js" type="text/javascript"></script>
<script defer=""
        src="https://cryptocoinvest.io/static/tpl/assets/js/material-dashboard.js?v=1.2.2"></script><!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script defer="" src="https://cryptocoinvest.io/static/tpl/assets/js/demo.js"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/calculator.js?2" type="text/javascript"></script>
<script src="https://cryptocoinvest.io/static/tpl/assets/js/cabinet.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {
        calculator.init();
    });</script>

<div class="content">
    <div class="container-fluid stat-block">
        <div class="header text-center"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange"><i class="material-icons">work</i></div>
                    <div class="card-content"><p class="category">В работе</p>
                        <h3 class="card-title">0</h3> <span class="currency"></span></div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose"><i class="material-icons"><img
                                style="width:25px;height:25px;vertical-align: text-bottom;"
                                src="/static/cabinet/img/icn/rising-graph.svg"></i></div>
                    <div class="card-content"><p class="category">Прибыль</p>
                        <h3 class="card-title">0</h3> <span class="currency"></span></div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green"><i class="material-icons"><img
                                style="width:25px;height:25px;vertical-align: text-bottom;"
                                src="/static/cabinet/img/icn/wallet-filled-money-tool.svg"></i></div>
                    <div class="card-content"><p class="category">Баланс</p>
                        <h3 class="card-title">0</h3> <span class="currency"></span></div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue"><i class="material-icons">cached</i></div>
                    <div class="card-content"><p class="category">Ожидает</p>
                        <h3 class="card-title">0.00</h3> <span class="currency"></span></div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="calculator sliders">
        <div class="card">
            <div class="card-content">
                <div id="calculator-header-btn" class="btn-group">
                    <button value="CLASSIC" class="btn width25-per" type="button">CLASSIC
                        <div class="ripple-container"></div>
                    </button>
                    <button value="INFINITY" class="btn width25-per" type="button">INFINITY
                        <div class="ripple-container"></div>
                    </button>
                    <button value="SAFER" class="btn width25-per btn-info" type="button">SAFER
                        <div class="ripple-container"></div>
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="form-group"><input id="sumValue" class="form-control only_number"
                                                           placeholder="Сумма"><span class="material-input"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 sld">
                        <div id="sliderSum" class="slider noUi-target noUi-ltr noUi-horizontal">
                            <div class="noUi-base">
                                <div class="noUi-connect" style="left: 0%; right: 93.3396%;"></div>
                                <div class="noUi-origin" style="left: 6.66044%;">
                                    <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                </div>
                            </div>
                            <div class="noUi-pips noUi-pips-horizontal">
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 0.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 0.00000%">
                                    1
                                </div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 4.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 8.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 12.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 16.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 20.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 24.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 28.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 32.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 36.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 40.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 44.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 48.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 52.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 56.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 60.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 64.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 68.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 72.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 76.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 80.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 84.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 88.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 92.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 96.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 100.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 100.00000%">
                                    15000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="form-group"><input id="daysValue" class="form-control only_number"
                                                           placeholder="дней"><span class="material-input"></span></div>
                        </div>
                    </div>
                    <div class="col-sm-10 sld">
                        <div id="sliderDays" class="slider noUi-target noUi-ltr noUi-horizontal">
                            <div class="noUi-base">
                                <div class="noUi-connect" style="left: 0%; right: 85.7143%;"></div>
                                <div class="noUi-origin" style="left: 14.2857%;">
                                    <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                </div>
                            </div>
                            <div class="noUi-pips noUi-pips-horizontal">
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 0.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 0.00000%">
                                    10
                                </div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 4.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 8.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 12.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 16.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 20.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 24.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 28.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 32.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 36.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 40.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 44.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 48.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 52.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 56.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 60.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 64.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 68.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 72.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 76.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 80.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 84.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 88.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 92.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 96.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 100.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 100.00000%">
                                    360
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group"><label class="control-label">Реинвест</label><input id="reinvestValue"
                                                                                                    class="form-control only_number"
                                                                                                    placeholder="Реинвест"><span
                                class="material-input"></span><span class="material-input"></span></div>
                    </div>
                    <div class="col-sm-10 sld">
                        <div id="sliderReinvest" class="slider noUi-target noUi-ltr noUi-horizontal">
                            <div class="noUi-base">
                                <div class="noUi-connect" style="left: 0%; right: 80%;"></div>
                                <div class="noUi-origin" style="left: 20%;">
                                    <div class="noUi-handle" data-handle="0" style="z-index: 4;"></div>
                                </div>
                            </div>
                            <div class="noUi-pips noUi-pips-horizontal">
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 0.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 0.00000%">
                                    0
                                </div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 1.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 2.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 3.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 4.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 5.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 6.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 7.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 8.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 9.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 10.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 11.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 12.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 13.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 14.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 15.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 16.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 17.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 18.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 19.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 20.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 21.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 22.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 23.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 24.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 25.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 26.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 27.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 28.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 29.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 30.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 31.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 32.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 33.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 34.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 35.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 36.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 37.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 38.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 39.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 40.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 41.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 42.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 43.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 44.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 45.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 46.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 47.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 48.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 49.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 50.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 51.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 52.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 53.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 54.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 55.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 56.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 57.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 58.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 59.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 60.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 61.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 62.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 63.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 64.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 65.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 66.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 67.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 68.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 69.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 70.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 71.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 72.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 73.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 74.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 75.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 76.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 77.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 78.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 79.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 80.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 81.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 82.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 83.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 84.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 85.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 86.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 87.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 88.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 89.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 90.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 91.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 92.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 93.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 94.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 95.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 96.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 97.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 98.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-normal"
                                     style="left: 99.00000%"></div>
                                <div class="noUi-marker noUi-marker-horizontal noUi-marker-large"
                                     style="left: 100.00000%"></div>
                                <div class="noUi-value noUi-value-horizontal noUi-value-large" style="left: 100.00000%">
                                    100
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="lbl">
                            <div>Прибыль</div>
                        </div>
                        <div class="card">
                            <div id="calc-profit" class="card-content">$742</div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="lbl">
                            <div>Всего</div>
                        </div>
                        <div class="card">
                            <div id="calc-total" class="card-content">$1742</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
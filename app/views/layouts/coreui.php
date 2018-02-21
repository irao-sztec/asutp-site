<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Панель управления,React,React.js,Vue,Vue.js">
        <link rel="shortcut icon" href="<?=SITE?>/images/favicon.png">
        <title>CoreUI - Open Source Bootstrap Admin Template</title>

        <!-- Icons -->
        <link href="<?=SITE?>/frameworks/flag-icon-css-master/css/flag-icon.min.css" rel="stylesheet">
        <link href="<?=SITE?>/frameworks/Font-Awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?=SITE?>/frameworks/simple-line-icons-master/css/simple-line-icons.css" rel="stylesheet">

        <!-- Main styles for this application -->
        <link href="<?=SITE?>/frameworks/coreui/css/style.css" rel="stylesheet">

        <!-- Highlight.js styles -->
        <link href="<?=SITE?>/frameworks/highlight/styles/solarized-dark.css" rel="stylesheet">

        <!-- Styles required by this views -->
        <link href="<?=SITE?>/styles/default.css" rel="stylesheet">

    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Панель управления</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Пользователи</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">Настройки</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
                </li>
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#"><i class="icon-list"></i></a>
                </li>
                <li class="nav-item d-md-down-none">
                    <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?=SITE?>/frameworks/coreui/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
                        <div class="dropdown-header text-center">
                            <strong>Настройки</strong>
                        </div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Настройки</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
                        <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                        <div class="divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler aside-menu-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
        </header>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index"><i class="icon-speedometer"></i> Панель управления </a>
                        </li>

                        <li class="nav-title">
                            Тема
                        </li>
                        <li class="nav-item">
                            <a href="colors" class="nav-link"><i class="icon-drop"></i> Цвета</a>
                        </li>
                        <li class="nav-item">
                            <a href="typography" class="nav-link"><i class="icon-pencil"></i> Типографика</a>
                        </li>
                        <li class="nav-title">
                            Компоненты
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Базовые</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="base-breadcrumb"><i class="icon-puzzle"></i> Хлебные крошки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-cards"><i class="icon-puzzle"></i> Карточки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-carousel"><i class="icon-puzzle"></i> Карусель</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-collapse"><i class="icon-puzzle"></i> Аккордион</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-forms"><i class="icon-puzzle"></i> Формы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-jumbotron"><i class="icon-puzzle"></i> Широкий экран</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-list-group"><i class="icon-puzzle"></i> Списки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-navs"><i class="icon-puzzle"></i> Навигация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-pagination"><i class="icon-puzzle"></i> Нумерация страниц</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-popovers"><i class="icon-puzzle"></i> Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-progress"><i class="icon-puzzle"></i> Шкала прогресса</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-switches"><i class="icon-puzzle"></i> Переключатели</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-tables"><i class="icon-puzzle"></i> Таблицы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-tabs"><i class="icon-puzzle"></i> Вкладки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base-tooltips"><i class="icon-puzzle"></i> Подсказки</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Кнопки</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-buttons"><i class="icon-cursor"></i> Кнопки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-button-group"><i class="icon-cursor"></i> Группер. кнопки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-dropdowns"><i class="icon-cursor"></i> Выпад. списки</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons-social-buttons"><i class="icon-cursor"></i> Соц. сети</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="charts"><i class="icon-pie-chart"></i> Диаграммы</a>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Иконки</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-flags"><i class="icon-star"></i> Флаги <span class="badge badge-success">НОВОЕ</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-font-awesome"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-simple-line-icons"><i class="icon-star"></i> Simple Line Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Уведомления</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-alerts"><i class="icon-bell"></i> Сигнализация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-badge"><i class="icon-bell"></i> Бейджи</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications-modals"><i class="icon-bell"></i> Модальные окна</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="widgets"><i class="icon-calculator"></i> Виджеты <span class="badge badge-primary">НОВОЕ</span></a>
                        </li>
                        <li class="divider"></li>
                        <li class="nav-title">
                            Дополнительно
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Страницы</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-login" target="_top"><i class="icon-star"></i> Авторизация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-register" target="_top"><i class="icon-star"></i> Регистрация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-404" target="_top"><i class="icon-star"></i> Ошибка 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-500" target="_top"><i class="icon-star"></i> Ошибка 500</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <!-- Main content -->
            <main class="main">
                <div class="container-fluid">
                    <?=$content?>
                </div>
                <!-- /.conainer-fluid -->
            </main>

            <aside class="aside-menu">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="timeline" role="tabpanel">
                        <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                            <small><b>Today</b></small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout callout-warning m-0 py-3">
                            <div class="avatar float-right">
                                <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Meeting with
                                <strong>Lucas</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-info m-0 py-3">
                            <div class="avatar float-right">
                                <img src="<?=SITE?>/frameworks/coreui/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Skype with
                                <strong>Megan</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                            <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                            <small><b>Tomorrow</b></small>
                        </div>
                        <hr class="transparent mx-3 my-0">
                        <div class="callout callout-danger m-0 py-3">
                            <div>New UI Project -
                                <strong>deadline</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                            <small class="text-muted"><i class="icon-Главная"></i>&nbsp; creativeLabs HQ </small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-success m-0 py-3">
                            <div>
                                <strong>#10 Startups.Garden</strong> Meetup</div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
                        </div>
                        <hr class="mx-3 my-0">
                        <div class="callout callout-primary m-0 py-3">
                            <div>
                                <strong>Team meeting</strong>
                            </div>
                            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                            <small class="text-muted"><i class="icon-Главная"></i>&nbsp; creativeLabs HQ </small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                        <hr class="mx-3 my-0">
                    </div>
                    <div class="tab-pane p-3" id="messages" role="tabpanel">
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                        <hr>
                        <div class="message">
                            <div class="py-3 pb-5 mr-3 float-left">
                                <div class="avatar">
                                    <img src="<?=SITE?>/frameworks/coreui/img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">Lukasz Holeczek</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                        </div>
                    </div>
                    <div class="tab-pane p-3" id="settings" role="tabpanel">
                        <h6>Настройки</h6>

                        <div class="aside-options">
                            <div class="clearfix mt-4">
                                <small><b>Option 1</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                            </div>
                        </div>

                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 2</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                            </div>
                        </div>

                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 3</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>

                        <div class="aside-options">
                            <div class="clearfix mt-3">
                                <small><b>Option 4</b></small>
                                <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                    <input type="checkbox" class="switch-input" checked="">
                                    <span class="switch-label" data-on="On" data-off="Off"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                        </div>

                        <hr>
                        <h6>System Utilization</h6>

                        <div class="text-uppercase mb-1 mt-4">
                            <small><b>CPU Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>

                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>Memory Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">11444GB/16384MB</small>

                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>SSD 1 Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">243GB/256GB</small>

                        <div class="text-uppercase mb-1 mt-2">
                            <small><b>SSD 2 Usage</b></small>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="text-muted">25GB/256GB</small>
                    </div>
                </div>
            </aside>
        </div>

        <footer class="app-footer">
            <span><a href="http://coreui.io">CoreUI</a> © 2018 creativeLabs.</span>
            <span class="ml-auto">Powered by <a href="http://coreui.io">CoreUI</a></span>
        </footer>

        <!-- Bootstrap and necessary plugins -->
        <script src="<?=SITE?>/frameworks/jquery/jquery-3.3.1.min.js"></script>
        <script src="<?=SITE?>/frameworks/popper/popper.min.js"></script>
        <script src="<?=SITE?>/frameworks/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=SITE?>/frameworks/pace-progress/pace.min.js"></script>

        <!-- Plugins and scripts required by all views -->
        <script src="<?=SITE?>/frameworks/Chart.js-2.7.1/dist/Chart.js"></script>

        <!-- CoreUI main scripts -->

        <script src="<?=SITE?>/frameworks/coreui/js/app.js"></script>

        <!-- Plugins and scripts required by this views -->

        <!-- Custom scripts required by this view -->
        <script src="<?=SITE?>/frameworks/coreui/js/views/main.js"></script>

        <!-- Highlight.js -->
        <script src="<?=SITE?>/frameworks/highlight/highlight.pack.js"></script>
        <script>
            hljs.initHighlightingOnLoad();

            $(document).ready(function() {
                $('pre code').each(function(i, block) {
                    hljs.highlightBlock(block);
                });
            });
        </script>

        <!-- My scripts -->
        <?php
            foreach($scripts as $script) {
                echo $script;
            }
        ?>
    </body>
</html>
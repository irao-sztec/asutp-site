<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= SITE ?>/frameworks/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" href="<?= SITE ?>/styles/dashboard-bootstrap.css">

        <title>Бутстрап-фреймворк</title>
    </head>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-gradient-dark flex-md-nowrap p-0">
            <span class="navbar-brand col-sm-3 col-md-2 mr-auto text-light text-center">Сайт &quot;АСУТП&quot;</span>
            <ul class="navbar-nav px-3">
                <!--<li class="nav-item">
                    <a class="nav-link" href="<?=SITE?>/bootstrap/index">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="<?=SITE?>/bootstrap/topmenu">С верхним меню</a>
                </li>-->
                <li class="nav-item text-nowrap active">
                    <a class="nav-link" href="<?=SITE?>/bootstrap/dashboard">Панель управления</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-gradient-secondary sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                            <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <?=$content?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= SITE ?>/frameworks/jquery/jquery-3.3.1.min.js"></script>
        <script src="<?= SITE ?>/frameworks/popper/popper.min.js"></script>
        <script src="<?= SITE ?>/frameworks/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
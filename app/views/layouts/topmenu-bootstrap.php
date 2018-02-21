<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= SITE ?>/frameworks/bootstrap/css/bootstrap.css">

        <title>Бутстрап-фреймворк</title>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <span class="navbar-brand text-light">Сайт &quot;АСУТП&quot;</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=SITE?>/bootstrap/index">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=SITE?>/bootstrap/topmenu">С верхним меню</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?=SITE?>/bootstrap/dashboard" class="nav-link">Панель управления</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h1>Bootstrap framework</h1>

        <?=$content?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= SITE ?>/frameworks/jquery/jquery-3.3.1.min.js"></script>
        <script src="<?= SITE ?>/frameworks/popper/popper.min.js"></script>
        <script src="<?= SITE ?>/frameworks/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
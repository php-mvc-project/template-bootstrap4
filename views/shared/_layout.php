<?php
use PhpMvc\Html, PhpMvc\View;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title><?=Html::getTitle()?> - My Application</title>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/content/styles/app.css" />
    <script src="/vendor/components/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <?=Html::actionLink('My Application', 'index', 'home', null, array('class' => 'navbar-brand'))?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><?=Html::actionLink('Home', 'index', 'home', null, array('class' => 'nav-link'))?></li>
                        <li class="nav-item"><?=Html::actionLink('About', 'about', 'home', null, array('class' => 'nav-link'))?></li>
                        <li class="nav-item"><?=Html::actionLink('Contact', 'contact', 'home', null, array('class' => 'nav-link'))?></li>
                    </ul>
                    <?php 
                        // render partial view ~/views/shared/_login.php
                        Html::render('_login');
                    ?>
                </div>
            </div>
        </hav>
    </header>

    <div class="container">
        <?php
            // render current view
            Html::renderBody();
        ?>
    </div>

    <hr />

    <footer>
        <div class="container">
            Copyright &copy; My Application, <?=date('Y')?><br />
            <small>
                This page is created in <?=round(microtime(true) - PhpMvc\HttpContext::getCurrent()->getRequest()->server('REQUEST_TIME_FLOAT'), 5)?> seconds
                <br />
                PHP v<?=phpversion()?> &middot; PHP MVC Project v<?=PhpMvc\Info::VERSION?>
            </small>
        </div>
    </footer>
</body>
</html>
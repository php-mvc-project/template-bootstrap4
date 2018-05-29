<?php
$session = PhpMvc\View::getHttpContext()->getSession();

echo '<ul class="navbar-nav navbar-right">';

if (empty($session['user'])) {
    echo '<li class="nav-item">' . PhpMvc\Html::actionLink('Log in', 'index', 'account', null, array('class' => 'nav-link')) . '</li>';
}
else {
    echo '<li class="nav-item"><span class="navbar-text">Hello, ' . $session['user'] . '!</span></li>';
    echo '<li class="nav-item">' . PhpMvc\Html::actionLink('Log out', 'logout', 'account', null, array('class' => 'nav-link')) . '</li>';
}

echo '</ul>';
?>
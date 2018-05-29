<?php 
use PhpMvc\View;
use PhpMvc\Html;

View::setLayout('_layout');
View::setTitle('Contact');
?>

<h2><?=View::getTitle()?></h2>

<address>
    PHP MVC Project street<br />
    Russia, YO<br />
    <abbr title="Phone">P:</abbr>
    +7 111.010.0101
</address>

<address>
    <strong>Support:</strong> <a href="mailto:support@example.com">support@example.com</a><br />
    <strong>Marketing:</strong> <a href="mailto:marketing@example.com">marketing@example.com</a>
</address>

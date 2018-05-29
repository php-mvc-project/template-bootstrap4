<?php 
use PhpMvc\View;
use PhpMvc\Html;

View::setLayout('_layout');
View::setTitle('About');
?>

<h2><?=View::getTitle()?></h2>
<p>This site was made by good people!</p>
<p>This is the coolest site!</p>
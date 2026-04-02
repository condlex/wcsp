<?php
define( 'ABSPATH', __DIR__ . '/' );
require_once ABSPATH . 'class-single-person.php';
require_once ABSPATH . 'class-single-walker.php';

$walker = new Single_Walker();
$walker->say_hello( 'John' );
?>

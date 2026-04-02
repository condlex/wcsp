<?php
define( 'ABSPATH', __DIR__ . '/');
require_once ABSPATH . 'class-single-person.php';

class Single_Walker extends Single_Person {
    function say_hello( $name ) {
        echo "<b>Good morning $name!</b>";
    }
}
?>

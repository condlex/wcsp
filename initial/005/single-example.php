<?php
define( 'MAXIMIZED_NUMBER', 100 );

function check_value( $value ) {
    if ( MAXIMIZED_NUMBER > $value ) {
        echo "$value is in range of [0, " . MAXIMIZED_NUMBER . '].<br />';
    } else {
        echo "$value is out of range [0, " . MAXIMIZED_NUMBER . '].<br />';
    }
}

check_value( 50 );
check_value( 120 );
?>

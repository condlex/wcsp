<?php
function check_value( $value ) {
    define( 'NUMBER_100', 100 );
    $is_greater_100 = NUMBER_100 < $value;
    if ( ! $is_greater_100 ) {
        echo "$value is less than 100.<br/>";
    } else {
        echo "$value is greater than 100.<br/>";
    }
}

check_value( 50 );
check_value( 120 );
?>

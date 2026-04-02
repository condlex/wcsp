<?php
function is_greater_100( $value ) {
    define( 'NUMBER_100', 100 );
    return NUMBER_100 < $value;
}

function is_less_500( $value ) {
    define( 'NUMBER_500', 500 );
    return NUMBER_500 > $value;
}

function check_value( $value ) {
    if ( is_greater_100( $value ) && is_less_500( $value ) ) {
        echo "$value is in range [100, 500].<br/>";
    } else {
        echo "$value is out of range [100, 500].<br/>";
    }
}

check_value( 50 );
check_value( 200 );
check_value( 600 );
?>

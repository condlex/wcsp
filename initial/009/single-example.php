<?php
class Even_Number {
    function __constructor( $value ) {
        if ( $value % 2 == 0 ) {
            $this->value = $value;
        } else {
            $this->value = 0;
        }
    }

    function print() {
        echo "Value: {$this->value}<br/>";
    }
}

$number = new Even_Number( 2 );
$number->print();

$number = new Even_Number( 3 );
$number->print();

$number = new Even_Number( 4 );
$number->print();

?>

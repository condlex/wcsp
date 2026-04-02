<?php
class Even_Number {
    function __construct( $value ) {
        $this->value = $value;
    }

    function print() {
        echo "Even value: " . $this->value . "<br/>";
    }
}

class Odd_Number {
    function __construct( $value ) {
        $this->value = $value;
    }

    function print() {
        echo "Odd value: " . $this->value . "<br/>";
    }
}

$number = new Even_Number( 10 );

if ( $number instanceof Even_Number ) {
    $number->print();
} else {
    $number = new Odd_Number( 11 );
    $number->print();
}
?>

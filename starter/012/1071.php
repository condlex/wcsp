class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        return ( new Greatest_Common_Divisor( $str1, $str2 ) )->run();
    }
}

class Greatest_Common_Divisor {
    function __construct( $string_1, $string_2 ) {
        $this->string_1 = $string_1;
        $this->string_2 = $string_2;
    }

    function run() {
        if ( $this->string_1 . $this->string_2 !== $this->string_2 . $this->string_1 ) return "";
        return substr( $this->string_1, 0, $this->calculate( strlen( $this->string_1 ), strlen( $this->string_2 ) ) );
    }

    function calculate( $number_1, $number_2 ) {
        while ( $number_2 != 0 ) {
            $temporary = $number_2;
            $number_2 = $number_1 % $number_2;
            $number_1 = $temporary;
        }
        return $number_1;
    }    
}

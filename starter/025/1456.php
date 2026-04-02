class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function maxVowels($s, $k) {
        $calculator = new Maximum_Vowels_Calculator( $s, $k );
        return $calculator->run();
    }
}

class Maximum_Vowels_Calculator {
    function __construct( $string, $length ) {
        $this->string = $string;
        $this->length = $length;
    }

    function run() {
        $vowels_checker = array(
            'a' => '_',
            'e' => '_',
            'i' => '_',
            'o' => '_',
            'u' => '_',
            'A' => '_',
            'E' => '_',
            'I' => '_',
            'O' => '_',
            'U' => '_'
        );
        $size = strlen( $this->string );
        $count = 0;
        $min_size = min( $size, $this->length );
        for ( $i = 0; $i < $min_size; $i++ ) {
            $character = $this->string[ $i ];
            if ( isset( $vowels_checker[ $character ] ) ) {
                $count++;
            }
        }
        if ( $size <= $this->length ) return $count;

        $maximum_count = $count;
        $size_k = $size - $this->length;
        for ( $i = 0; $i < $size_k; $i++ ) {
            $character = $this->string[ $i ];
            if ( isset( $vowels_checker[ $character ] ) ) {
                $count--;
            }
            $character_k = $this->string[ $i + $this->length ];
            if ( isset( $vowels_checker[ $character_k ] ) ) {
                $count++;
            }
            if ( $count > $maximum_count ) {
                $maximum_count = $count;
            }
        }
        return $maximum_count;
    }
}

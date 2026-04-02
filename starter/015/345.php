class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        return ( new ReverseVowels( $s ) )->run();
    }
}

class ReverseVowels {
    function __construct( $string ) {
        $this->string = $string;
    }

    function run() {
        $vowels = array(
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
        $left = 0;
        $right = $size - 1;
        while ( $left <= $right ) {
            $left_character = $this->string[ $left ];
            $right_character = $this->string[ $right ];
            $found = false;
            if ( ! isset( $vowels[ $left_character ] ) ) {
                $left++;
                $found = true;
            }
            if ( ! isset( $vowels[ $right_character ] ) ) {
                $right--;
                $found = true;
            }
            if ( $found ) continue;
            $this->string[ $left++ ] = $right_character;
            $this->string[ $right-- ] = $left_character;
        }
        return $this->string;
    }
}

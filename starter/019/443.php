class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        $compressor = new String_Compressor( $chars );
        $count = $compressor->run();
        $compressor->after_run( $chars );
        return $count;
    }
}

class String_Compressor {
    function __construct( $characters ) {
        $this->characters = $characters;
    }

    function after_run( &$characters ) {
        $characters = $this->characters;
    }

    function run() {
        $target = [];
        $count = 1;
        $last_character = array_shift( $this->characters );
        foreach ( $this->characters as $character ) {
            if ( $character == $last_character ) {
                $count++;
            } else {
                $target[] = $last_character;
                if ( $count > 1 ) {
                    foreach ( str_split( $count . '' ) as $digit_character ) {
                        $target[] = $digit_character;
                    }
                }
                $last_character = $character;
                $count = 1;
            }
        }
        $target[] = $last_character;
        if ( $count > 1 ) {
            foreach ( str_split( $count . '' ) as $digit_character ) {
                $target[] = $digit_character;
            }
        }
        $this->characters = $target;
        return count( $target );
    }
}

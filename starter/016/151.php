class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        return Words_Reverse::execute( $s );
    }
}

class Words_Reverse {
    static function execute( &$string ) {
        $target = '';
        $count = 0;
        for ( $i = strlen( $string ) - 1; $i >= 0; $i-- ) {
            if ( $string[ $i ] == ' ' ) {
                if ( $count > 0 ) {
                    $target .= substr( $string, $i + 1, $count ) . ' ';
                    $count = 0;
                }
            } else {
                $count++;
                if ( $i == 0 ) {
                    $target .= substr( $string, $i, $count );
                }
            }
        }
        return trim( $target );
    }
}

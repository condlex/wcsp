class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeStars($s) {
        return Stars_Remover::execute( $s );
    }
}

class Stars_Remover {
    static function execute( &$string ) {
        $target = [];
        $count = 0;
        for ( $i = strlen( $string ); $i >= 0; $i-- ) {
            $character = $string[ $i ];
            if ( $character == '*' ) {
                $count++;
            } else {
                if ( $count == 0 ) {
                    $target[] = $character;
                } else {
                    $count--;
                }
            }
        }
        return implode( '', array_reverse( $target ) );
    }
}

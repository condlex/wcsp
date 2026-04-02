class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $builder = new Subsequence_Builder( $s, $t );
        return $builder->run();
    }
}

class Subsequence_Builder {
    function __construct( $container, $subsequence ) {
        $this->container = $container;
        $this->subsequence = $subsequence;
    }

    function run() {
        $size = strlen( $this->container );
        $position = -1;
        for ( $i = 0; $i < $size; $i++ ) {
            $character = $this->container[ $i ];
            $examined_position = strpos( $this->subsequence, $character, $position + 1 );
            if ( $examined_position === false ) return false;
            if ( $examined_position <= $position ) return false;
            $position = $examined_position;           
        }
        return true;
    }   
}

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $mover = new Zero_Mover( $nums );
        $mover->run();
        $mover->after_run( $nums );
    }
}

class Zero_Mover {
    function __construct( $numbers ) {
        $this->numbers = $numbers;
    }

    function after_run( &$numbers ) {
        $numbers = $this->numbers;
    }

    function run() {
        $number_count = count( $this->numbers );
        for ( $i = 0; $i < $number_count; $i++ ) {
            if ( $this->numbers[ $i ] == 0 ) {
                unset( $this->numbers[ $i ] );
                $this->numbers[] = 0;
            }
        }       
    }
}

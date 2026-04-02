class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function longestOnes($nums, $k) {
        $consecutive_ones = new Max_Consecutive_Ones_3( $nums, $k );
        return $consecutive_ones->run();
    }
}

class Max_Consecutive_Ones_3 {
    function __construct( $numbers, $length ) {
        $this->numbers = $numbers;
        $this->length = $length;
    }

    function run() {
        $size = count( $this->numbers );
        $maximum_consecutive_1 = 0;
        $left_position = 0;
        $right_position = 0;
        $flipped_count = 0;
        for ( ; $right_position < $size; $right_position++ ) {
            if ( $this->numbers[ $right_position ] == 0 ) $flipped_count++;
            while ( $flipped_count > $this->length ) {
                if ( $this->numbers[ $left_position++ ] == 0 ) $flipped_count--;
            }
            $count = $right_position - $left_position + 1;
            if ( $count > $maximum_consecutive_1 ) {
                $maximum_consecutive_1 = $count;
            }
        }
        return $maximum_consecutive_1;
    }
}

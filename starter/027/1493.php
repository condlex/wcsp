class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestSubarray($nums) {
        $deleter = new Subarray_1_Deleter( $nums );
        return $deleter->run();
    }
}

class Subarray_1_Deleter {
    function __construct( $number_array ) {
        $this->number_array = $number_array;
    }

    function run() {
        $size = count( $this->number_array );
        $left_position = 0;
        $right_position = 0;
        $flipped_count = 0;
        $maximum_count = 0;
        for ( ; $right_position < $size; $right_position++ ) {
            if ( $this->number_array[ $right_position ] == 0 ) $flipped_count++;
            while ( $flipped_count > 1 ) {
                if ( $this->number_array[ $left_position++ ] == 0 ) $flipped_count--;
            }
            $count = $right_position - $left_position;
            if ( $count > $maximum_count ) {
                $maximum_count = $count;
            }
        }
        return $maximum_count;
    }
}

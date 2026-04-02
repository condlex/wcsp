class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $calculator = new Leftmost_Pivot_Index();
        return $calculator->run( $nums );
    }
}

class Leftmost_Pivot_Index {
    function run( &$number_array ) {
        $size = count( $number_array );
        $left_sum = 0;
        $right_sum = array_sum( $number_array );
        for ( $i = 0; $i < $size; $i++ ) {
            $number = $number_array[ $i ];
            $right_sum -= $number;
            if ( $left_sum == $right_sum ) {
                return $i;
            }
            $left_sum += $number;
        }
        return -1;
    }
}

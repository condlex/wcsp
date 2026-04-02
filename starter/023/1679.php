class Solution {
    /*
     * Based on first solution of https://leetcode.com/problems/max-number-of-k-sum-pairs/solutions/2006243/java-11-features-100-0ms-simple-concise-gp40p
     */

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function maxOperations($nums, $k) {
        $calculator = new Max_Operations_Calculator( $nums, $k );
        return $calculator->run();
    }
}

class Max_Operations_Calculator {
    function __construct( $number_array, $k_sum ) {
        $this->number_array = $number_array;
        $this->k_sum = $k_sum;
    }

    function run() {
        $operations_recorder = [];
        $size = count( $this->number_array );
        $count = 0;
        for ( $i = 0; $i < $size; $i++ ) {
            $number = $this->number_array[ $i ];
            $distance = $this->k_sum - $number;
            if ( isset( $operations_recorder[ $distance ] ) && $operations_recorder[ $distance ] > 0 ) {
                $count++;
                $operations_recorder[ $distance ]--;               
            } else {
                if ( isset( $operations_recorder[ $number ] ) ) {
                    $operations_recorder[ $number ]++;
                } else {
                    $operations_recorder[ $number ] = 1;
                }
            }
        }
        return $count;
    }
}

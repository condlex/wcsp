class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        $calculator = new Maximum_Average_Calculator( $nums, $k );
        return $calculator->run();
    }
}

class Maximum_Average_Calculator {
    function __construct( $number_array, $k_sum ) {
        $this->number_array = $number_array;
        $this->k_sum = $k_sum;
    }

    function run() {
        $size = count( $this->number_array );
        if ( $size <= $this->k_sum ) return array_sum( $this->number_array ) / $this->k_sum;
        $size_k = $size - $this->k_sum;
        $current_sum = 0;
        for ( $i = 0; $i < $this->k_sum; $i++ ) {
            $current_sum += $this->number_array[ $i ];
        }
        $maximum_sum = $current_sum;
        for ( $i = 0; $i < $size_k; $i++ ) {
            $current_sum -= $this->number_array[ $i ] - $this->number_array[ $i + $this->k_sum ];
            if ( $current_sum > $maximum_sum ) {
                $maximum_sum = $current_sum;
            }
        }
        return $maximum_sum / $this->k_sum;
    }
}

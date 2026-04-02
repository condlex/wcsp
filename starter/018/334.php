class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function increasingTriplet($nums) {
        return ( new IncreaseTripletSubsequence( $nums, PHP_INT_MAX ) )->run();
    }
}

class IncreaseTripletSubsequence {
    function __construct( $numbers, $maximum_number ) {
        $this->numbers = $numbers;
        $this->maximum_number = $maximum_number;
    }

    function run() {
        $one = $this->maximum_number;
        $two = $this->maximum_number;
        foreach ( $this->numbers as $three ) {
            if ( $three <= $one ) {
                $one = $three;
            } else if ( $three <= $two ) {
                $two = $three;
            } else {
                return true;
            }
        }
        return false;
    }
}

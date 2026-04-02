class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        return ( new Product_Array_Except_Self( $nums ) )->run();
    }
}

class Product_Array_Except_Self {
    function __construct( $numbers ) {
        $this->numbers = $numbers;
    }

    function run() {
        $all_numbers_multipler = 1;
        $zero_count = 0;
        $target = [];
        foreach ( $this->numbers as $number ) {
            if ( $number == 0 ) {
                $zero_count++;
            } else {
                $all_numbers_multipler *= $number;
            }
        }
        foreach ( $this->numbers as $number ) {
            if ( $number == 0 ) {
                if ( $zero_count > 1 ) {
                    $target[] = 0;
                } else {
                    $target[] = $all_numbers_multipler;
                }
            } else {
                if ( $zero_count > 0 ) {
                    $target[] = 0;
                } else {
                    $target[] = $all_numbers_multipler / $number;
                }
            }
        }
        return $target;
    }
}

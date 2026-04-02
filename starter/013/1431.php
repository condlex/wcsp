class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        return ( new Kids_With_Greatest_Number_Candies( $candies, $extraCandies ) )->run();
    }
}

class Kids_With_Greatest_Number_Candies {
    function __construct( $candies, $extra_candies ) {
        $this->candies = $candies;
        $this->extra_candies = $extra_candies;
    }

    function run() {
        $result = [];
        $number = count( $this->candies );
        $maximum = max( $this->candies );
        for ( $i = 0; $i < $number; $i++ ) {
            $result[] = ( $this->candies[ $i ] + $this->extra_candies ) >= $maximum;
        }
        return $result;
    }
}

class Solution {

    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $calculator = new Highest_Altitude( $gain );
        return $calculator->run();
    }
}

class Highest_Altitude {
    function __construct( $gain_array ) {
        $this->gain_array = $gain_array;
    }

    function run() {
        $size = count( $this->gain_array );
        $previous_number = 0;
        $highest_altitude = 0;
        for ( $i = 0; $i < $size; $i++ ) {
            $current_number = $this->gain_array[ $i ];
            $sum = $current_number + $previous_number;
            if ( $sum > $highest_altitude ) {
                $highest_altitude = $sum;
            }
            $previous_number = $sum;
        }
        return $highest_altitude;
    }
}

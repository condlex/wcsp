class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $calculator = new Water_Area_Calculator( $height );
        return $calculator->run();
    }
}

class Water_Area_Calculator {
    function __construct( $height_array ) {
        $this->height_array = $height_array;
    }

    function run() {
        $size = count( $this->height_array );
        if ( $size < 3 ) return min( $this->height_array );
        $left_position = 0;
        $right_position = $size - 1;
        $maximum_water_area = 0;
        while ( $left_position < $right_position ) {
            $left_height = $this->height_array[ $left_position ];
            $right_height = $this->height_array[ $right_position ];
            if ( $left_height < $right_height ) {
                $water_area = $left_height * ( $right_position - $left_position++ );
            } else {
                $water_area = $right_height * ( $right_position-- - $left_position );
            }
            if ( $water_area > $maximum_water_area ) {
                $maximum_water_area = $water_area;
            }
        }
        return $maximum_water_area;
    }
}

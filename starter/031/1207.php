class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        return ( new Unique_Occurrences() )->run( $arr );
    }
}

class Unique_Occurrences {
    function run( &$number_array ) {
        $size = count( $number_array );
        $hash = [];
        for ( $i = 0; $i < $size; $i++ ) {
            $number = $number_array[ $i ];
            if ( isset( $hash[ $number ] ) ) {
                $hash[ $number ]++;
            } else {
                $hash[ $number ] = 1;
            }
        }
        $value_array = array_values( $hash );
        $unique_array = array_unique( $value_array );
        return count( $value_array ) == count( $unique_array );
    }
}

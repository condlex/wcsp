class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        return ( new Two_Arrays_Difference() )->run( $nums1, $nums2 );
    }
}

class Two_Arrays_Difference {
    function run( &$number_array_1, &$number_array_2 ) {
        $size_1 = count( $number_array_1 );
        $size_2 = count( $number_array_2 );
        $number_hash_1 = array_flip( $number_array_1 );
        $number_hash_2 = array_flip( $number_array_2 );
        $used_hash_1 = array();
        $used_hash_2 = array();
        $distinct_1 = array();
        $distinct_2 = array();
        for ( $i = 0; $i < $size_1; $i++ ) {
            $number = $number_array_1[ $i ];
            if ( ! isset( $number_hash_2[ $number ] ) ) {
                if ( ! isset( $used_hash_1[ $number ] ) ) {
                    $distinct_1[] = $number;
                    $used_hash_1[ $number ] = 0;
                }
            }
        }        
        for ( $i = 0; $i < $size_2; $i++ ) {
            $number = $number_array_2[ $i ];
            if ( ! isset( $number_hash_1[ $number ] ) ) {
                if ( ! isset( $used_hash_2[ $number ] ) ) {
                    $distinct_2[] = $number;
                    $used_hash_2[ $number ] = 0;
                }
            }
        }        
        return array( $distinct_1, $distinct_2 );
    }
}

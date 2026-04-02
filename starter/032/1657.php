class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        return String_Comparator::run( $word1, $word2 );
    }
}

class String_Comparator {
    static function run( &$word_1, &$word_2 ) {
        $counter_1 = count_chars( $word_1, 1 );
        $counter_2 = count_chars( $word_2, 1 );
        $key_array_1 = array_keys( $counter_1 );
        $key_array_2 = array_keys( $counter_2 );
        sort( $key_array_1 );
        sort( $key_array_2 );
        if ( $key_array_1 !== $key_array_2 ) return false;
        $value_array_1 = array_values( $counter_1 );
        $value_array_2 = array_values( $counter_2 );
        sort( $value_array_1 );
        sort( $value_array_2 );
        return $value_array_1 === $value_array_2;
    }
}

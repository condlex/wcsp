class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        return ( new Merge_String_Alternately( $word1, $word2 ) )->run();
    }
}

class Merge_String_Alternately {
    function __construct( $word_1, $word_2 ) {
        $this->word_1 = $word_1;
        $this->word_2 = $word_2;
    }

    function run() {
        $size_1 = strlen( $this->word_1 );
        $size_2 = strlen( $this->word_2 );
        $target = [];
        $maximum_size = max( $size_1, $size_2 );
        for ( $i = 0; $i < $maximum_size; $i++) {
            if ( $i < $size_1 ) {
                $target[] = $this->word_1[ $i ];
            }
            if ( $i < $size_2 ) {
                $target[] = $this->word_2[ $i ];
            }
        }
        return implode('', $target);
    }
}

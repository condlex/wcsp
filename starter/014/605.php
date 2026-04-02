class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        return ( new Can_Place_Flowers( $flowerbed, $n ) )->run();
    }
}

class Can_Place_Flowers {
    function __construct( $flower_bed, $counter ) {
        $this->flower_bed = $flower_bed;
        $this->counter = $counter;
    }

    function run() {
        array_unshift( $this->flower_bed, 0 );
        array_push( $this->flower_bed, 0 );
        $size = count( $this->flower_bed );
        $zero_count = 0;
        for ( $i = 0; $i < $size; $i++ ) {
            if ( $this->flower_bed[ $i ] == 0 ) {
                $zero_count++;
                continue;
            }
            if ( $zero_count > 0 ) {
                $zero = $zero_count - 1;
                $this->counter -= ( $zero - ( $zero % 2 ) ) / 2;
                $zero_count = 0;
            }
            if ( $this->counter <= 0 ) return true;
        }
        if ( $zero_count > 0 ) {
            $zero = $zero_count - 1;
            $this->counter -= ( $zero - ( $zero % 2 ) ) / 2;            
        }
        return $this->counter <= 0;
    }
}

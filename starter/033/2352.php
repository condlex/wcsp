class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function equalPairs($grid) {
        return PairsCounter::execute( $grid );
    }
}

class PairsCounter {
    static function execute( &$grid ) {
        $size = count( $grid );
        $count = 0;
        $column_hash = [];
        $row_hash = [];
        for ( $i = 0; $i < $size; $i++ ) {
            $column = array_column( $grid, $i );
            $row = $grid[ $i ];
            $column_key = implode( '_', $column );
            $row_key = implode( '_', $row );
            $column_hash[ $column_key ] = ( $column_hash[ $column_key ] ?? 0 ) + 1;
            $row_hash[ $row_key ] = ( $row_hash[ $row_key ] ?? 0 ) + 1;
        }
        foreach ( $row_hash as $key => $value ) {
            $column_value = $column_hash[ $key ];
            if ( ! isset( $column_value ) ) continue;
            $count += $column_value * $row_hash[ $key ];           
        }
        return $count;
    }
}

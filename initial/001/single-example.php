<?php
function paragraph( $no ) {
    ?>
    <div>
        <?php
        echo esc_html(
            print_nums( $no )
        );
        ?>
    </div>
    <?php
}

function print_nums( $nums ) {
    return "<b>" . $nums . "</b>";
}

function esc_html( $s ) {
    return $s;
}

paragraph( 10 );
?>

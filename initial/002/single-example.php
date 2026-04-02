<?php
function esc_html( $s ) {
    return $s;
}

$text = 'Hello world!';
?>

<?php echo esc_html( $text ); ?>

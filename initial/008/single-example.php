<?php
$even_numbers = array( 2, 4, 6, 8 );
$formatted_string = "";
foreach ( $even_numbers as $number ) {
    $formatted_string .= ", $number";
}
echo "<b>$formatted_string</b>";
?>

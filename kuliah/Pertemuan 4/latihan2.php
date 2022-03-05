<?php
//menghitung total 2 kubus

function total_luas_dua_kubus($a, $b) {
    $luas_a = $a * $a * $a;
    $luas_b = $b * $b * $b;

    $total = $luas_a + $luas_b;

    return "Total luas dari kubu A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}
echo total_luas_dua_kubus(9,4);
echo "<br>";
echo total_luas_dua_kubus(10,15);
?>
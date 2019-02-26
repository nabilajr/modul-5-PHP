<?php
    function luas_trapesium ($alas, $sisi, $tinggi) {
        return ($alas + $sisi) * $tinggi/2;
    }
    $a = 15;
    $b = 5;
    $t = 10;
    echo "Luas trapesium<br> alas = $a <br> sisi = $b <br> tinggi =$t <br>
    hasil dari luas trapesium adalah ";
    echo luas_trapesium($a, $b, $t);
?>

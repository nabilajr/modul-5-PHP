<?php
    function keliling_trapesium ($sisi1, $sisi2, $sisi3, $sisi4) {
        return $sisi1 + $sisi2 + $sisi3 + $sisi4;
    }
    $AB = 15;
    $BC = 10;
    $CD = 8;
    $DA = 4;
    echo "Keliling trapesium<br> sisi = $AB <br> sisi = $BC <br>
    sisi = $CD <br> sisi = $DA <br> hasil kelilingnya adalah ";
    echo keliling_trapesium($AB, $BC, $CD, $DA);
?>
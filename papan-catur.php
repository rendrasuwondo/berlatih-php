<?php

function papan_catur($angka)
{
    // tulis kode di sini
    $return = "";

    for ($i = 1; $i <= $angka; $i++) {

        if (fmod($i, 2) == 0) {
            $maks = $angka - 1;
            $str = "&nbsp;&nbsp;";
        } else {
            $maks = $angka;
            $str = "";
        }

        for ($j = 1; $j <= $maks; $j++) {
            $str .= "#&nbsp;&nbsp;";
        }
        $return .= $str . "<br>";
    }
    return $return . "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
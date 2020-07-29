<?php
function skor_terbesar($arr)
{
    //kode di sini
    $return = [];

    $laravel = 0;
    $Native = 0;
    $Js = 0;

    foreach ($arr as $key => $a) {
        if ($a["kelas"] == "Laravel") {

            if ($a["nilai"] > $laravel) {
                $laravel = $a["nilai"];
                $return["Laravel"] =  [
                    "nama" => $a["nama"],
                    "kelas" => $a["kelas"],
                    "nilai" => $a["nilai"]
                ];
            }
        }

        if ($a["kelas"] == "React Native") {


            if ($a["nilai"] > $Native) {

                $Native = $a["nilai"];
                $return["React Native"] =  [
                    "nama" => $a["nama"],
                    "kelas" => $a["kelas"],
                    "nilai" => $a["nilai"]
                ];
            }
        }

        if ($a["kelas"] == "React JS") {

            if ($a["nilai"] > $Js) {
                $Js = $a["nilai"];
                $return["React JS"] =  [
                    "nama" => $a["nama"],
                    "kelas" => $a["kelas"],
                    "nilai" => $a["nilai"]
                ];
            }
        }
    }

    return $return;
}

// TEST CASES
$skor = [
    [
        "nama" => "Bobby",
        "kelas" => "Laravel",
        "nilai" => 78
    ],
    [
        "nama" => "Regi",
        "kelas" => "React Native",
        "nilai" => 86
    ],
    [
        "nama" => "Aghnat",
        "kelas" => "Laravel",
        "nilai" => 90
    ],
    [
        "nama" => "Indra",
        "kelas" => "React JS",
        "nilai" => 85
    ],
    [
        "nama" => "Yoga",
        "kelas" => "React Native",
        "nilai" => 77
    ],
];

// echo '<pre>';
// print_r($skor);
// echo '</pre>';

echo '<pre>';
print_r(skor_terbesar($skor));
echo '</pre>';
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/

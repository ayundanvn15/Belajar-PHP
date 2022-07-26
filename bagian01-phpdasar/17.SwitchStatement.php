<?php

$nilai = "A";

if($nilai == "A"){
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
}else if($nilai == "B" || $nilai == "C"){
    echo "ANda Lulus" . PHP_EOL;
} else if($nilai == "C" || $nilai == "C"){
    echo "ANda tidak Lulus" . PHP_EOL;
} else{
    echo "Mungkin adnda salah jurusan" . PHP_EOL;
}

switch ($nilai){
    case "A" :
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default :
        echo "Mungkin adnda salah jurusan" . PHP_EOL;

}

switch ($nilai):
    case "A" :
        echo "Anda Lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default :
        echo "Mungkin adnda salah jurusan" . PHP_EOL;

endswitch;

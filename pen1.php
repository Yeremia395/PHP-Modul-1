<?php
$Angka1 = $_POST["angka1"];
$Angka2 = $_POST["angka2"];

if($_POST["Submit"] == "jumlah"){
    $hasil=$Angka1 + $Angka2;
    echo $hasil="$Angka1 + $Angka2 = $hasil";
}
else if($_POST["Submit"] == "kurang"){
    $hasil=$Angka1 - $Angka2;
    echo $hasil="$Angka1 - $Angka2 = $hasil";
}
else if($_POST["Submit"] == "bagi"){
    $hasil=$Angka1 / $Angka2;
    echo $hasil="$Angka1 / $Angka2 = $hasil";
}
else if($_POST["Submit"] ==" kali"){
    $hasil=$Angka1 * $Angka2;
    echo $hasil="$Angka1 * $Angka2 = $hasil";
}

?>
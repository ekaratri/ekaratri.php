<?php
//array
// variabel yang dapat memiliki banyak nilai
// elemen dalam array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februri", "maret"];
$arr1 = [123, "tulisan", false];

//menampilkan array
//var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";

echo "<br>";
var_dump($hari);


?>
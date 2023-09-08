<?php
//$siswa = [
    //["Eka Ratri Permadani", "01234567", "Rekayasa Perangkat Lunak", "permadanieka66@gmail.com"],
    //["Maero Mukti Wibowo", "8910111", "Teknik Kendaraan Ringan Otomotif", "maeromukti88@gmail.com"]
//]; 

// Array Associative
// definisinya sama dengan key numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$siswa = [
    [
    "nama" => "Eka Ratri Permadani",
    "nrp" => "01234567",
    "email" => "permadanieka66@gmail.com",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "gambar" => "cewek.png"
],
[
    "nama" => "Maero Mukti Wibowo",
    "nrp" => "8910111",
    "email" => "maeromukti88@gmail.com",
    "jurusan" => "Teknik Kendaraan Ringan Otomotif",
    "gambar" => "cowok.png"

]
];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<?php foreach( $siswa as $ssw ) : ?> 
<ul>
<li>
<img src="img/<?= $ssw["gambar"];?>" width="150px">
</li>
<li>Nama : <?= $ssw["nama"]; ?></li>
<li>NRP : <?= $ssw["nrp"]; ?></li>
<li>Email : <?= $ssw["email"]; ?></li>
<li>Jurusan : <?= $ssw["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>

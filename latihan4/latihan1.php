<?php
// $GET 
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
<title>GET</title>
</head>
<body>
<h1>Siswa</h1>
<ul>
<?php foreach( $siswa as $ssw ) : ?>
<li>
<a href="latihan2.php?nama=<?= $ssw["nama"]; ?>&nrp=<?= $ssw["nrp"]; ?>&email=<?= $ssw["email"]; ?>&jurusan=<?= $ssw["jurusan"]; ?>&gambar=<?= $ssw["gambar"]; ?>"><?= $ssw["nama"]; ?></a>
</li>
<?php endforeach; ?>
</ul>
</body>
</html>





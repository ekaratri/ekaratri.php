<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$ssw = query("SELECT * FROM siswa WHERE id = $id")[0];
//var_dump($ssw["nama"]);

//koneksi ke DBMS
//$conn = mysqli_connect("localhost", "root", "", "phpdasar2");
//cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"]) ) {

// cek apakah data berhasil diubah atau tidak
if( ubah($_POST) > 0 ) {
    echo "
    <script>
    alert('data berhasil diubah!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "<script>
    alert('data gagal diubah!');
    document.location.href = 'index.php';
    </script>
    ";
}

    //ambil data dari tiap element dalam form 
    //$nrp = $_POST["nrp"];
    //$nama = $_POST["nama"];
    //$email = $_POST["email"];
    //$jurusan = $_POST["jurusan"];
    //$gambar = $_POST["gambar"];

    

// cek apakah data berhasil ditambahkan atau tidak
//if( mysqli_affected_rows($conn) > 0 ) {
    //echo "berhasil";
//} else {
   // echo "gagal!";
   // echo "<br>";
   // echo mysqli_error($conn);
//} 

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data siswa</title>
</head>
<body>
<h1>Ubah data siswa</h1>

<form action="" method="post">
<input type="hidden" name="id" value="<?= $ssw["id"]; ?>">
<ul>
<li>
<label for="nrp">NRP : </label>
<input type="text" name="nrp" id="nrp" required
value="<?= $ssw["nrp"]; ?>">
</li>
<li>
<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama" value="<?= $ssw["nama"]; ?>">
</li>
<li>
<label for="email">Email : </label>
<input type="text" name="email" id="email" value="<?= $ssw["email"]; ?>">
</li>
<li>
<label for="jurusan">Jurusan : </label>
<input type="text" name="jurusan" id="jurusan" value="<?= $ssw["jurusan"] ?>">
</li>
<li>
<label for="gambar">Gambar : </label>
<input type="text" name="gambar" id="gambar" value="<?= $ssw["gambar"]; ?>">
</li>
<li>
<button type="submit" name="submit">Ubah Data!</button>
</li>
</ul>

</form>
    
</body>
</html>
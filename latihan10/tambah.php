<?php
require 'functions.php';

//koneksi ke DBMS
//$conn = mysqli_connect("localhost", "root", "", "phpdasar2");
//cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"]) ) {

    //var_dump($_POST);
   // var_dump($_FILES);
   // die;



// cek apakah data berhasil ditambahkan atau tidak
if( tambah($_POST) > 0 ) {
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "<script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script>
    !";
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
    <title>Tambah data siswa</title>
</head>
<body>
<h1>Tambah data siswa</h1>

<form action="" method="post" enctype="multipart/form-data">
<ul>
<li>
<label for="nrp">NRP : </label>
<input type="text" name="nrp" id="nrp" required>
</li>
<li>
<label for="nama">Nama : </label>
<input type="text" name="nama" id="nama">
</li>
<li>
<label for="email">Email : </label>
<input type="text" name="email" id="email">
</li>
<li>
<label for="jurusan">Jurusan : </label>
<input type="text" name="jurusan" id="jurusan">
</li>
<li>
<label for="gambar">Gambar : </label>
<input type="file" name="gambar" id="gambar">
</li>
<li>
<button type="submit" name="submit">Tambah Data!</button>
</li>
</ul>

</form>
    
</body>
</html>
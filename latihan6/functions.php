<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root", "", "phpdasar2");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $row[] = $row;
    }
    return $rows;
}
?>


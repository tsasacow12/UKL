<?php
include("koneksi.php");

$nama_barang = $_POST["nama"];
$stok = $_POST['stock'];
$harga = $_POST['hrg'];
$kategori = $_POST["penerbit"];


$sql = "INSERT INTO barang (nama_barang, stok, harga, kategori) VALUES ('$nama_barang', '$stok', '$harga', '$kategori')";

$result = mysqli_query($mysqli, $sql); // Menjalankan pernyataan SQL

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menambahkan data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Menutup koneksi ke database
?>
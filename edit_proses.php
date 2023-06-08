<?php
include("koneksi.php");

$id_makanan = $_POST["id_makanan"];
$nama = $_POST["nama_makanan"];
$kategori = $_POST['kategori_makanan'];
$porsi = $_POST['porsi'];
$kalori = $_POST["kalori"];

$sql = "UPDATE makanan SET nama_makanan = '$nama', kategori_makanan = '$kategori', porsi = '$porsi', kalori = '$kalori' WHERE id_makanan = '$id_makanan'";

$result = mysqli_query($mysqli, $sql); // Menjalankan pernyataan SQL

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Menutup koneksi ke database
?>

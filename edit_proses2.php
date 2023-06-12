<?php
include("koneksi.php");

$id_olga = $_POST["id_olahraga"];
$nama = $_POST["nama_olahraga"];
$kategori = $_POST['kategori_makanan'];
$porsi = $_POST['jenis_olahraga'];

$sql = "UPDATE olahraga SET nama_olahraga = '$nama', kategori_makanan = '$kategori', porsi = '$porsi', kalori = '$kalori' WHERE id_makanan = '$id_makanan'";

$result = mysqli_query($mysqli, $sql); // Menjalankan pernyataan SQL

if ($result) {
    header("location: index.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Menutup koneksi ke database
?>

<?php
include("koneksi.php");

$id_olga = $_POST["id_olahraga"];
$nama = $_POST["nama_olahraga"];
$kategori = $_POST['jenis_olahraga'];
$porsi = $_POST['kalori_terbuang'];

$sql = "UPDATE olahraga SET nama_olahraga = '$nama', jenis_olahraga  = '$kategori', kalori_terbuang = '$porsi' WHERE id_olahraga = '$id_olga'";

$result = mysqli_query($mysqli, $sql); // Menjalankan pernyataan SQL

if ($result) {
    header("Location: index2.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Menutup koneksi ke database
?>

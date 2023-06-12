<?php
include("koneksi.php");

$id = $_POST["id_makanan"];
$nama = $_POST['nama_makanan'];
$kategori = $_POST['kategori_makanan'];
$porsi = $_POST['porsi'];

$sql = "UPDATE makanan SET nama_makanan = '$nama', kategori_makanan = '$kategori', porsi = '$porsi' WHERE id_makanan = '$id' ";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    header("location: index.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli); // Menutup koneksi ke database
?>

<?php
include("koneksi.php");

$id_info = $_POST["id_info"];
$nama_makanan = $_POST["nama_makanan"];
$kalori = $_POST["info_makanan"];
$manfaat = $_POST['manfaat'];

$sql = "UPDATE informasi_makanan SET 
        nama_makanan = '$nama_makanan', 
        info_makanan = '$kalori',
        manfaat = '$manfaat'
        WHERE id_info = '$id_info'";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    header("location: index3.php");
} else {
    echo "Gagal memperbarui data: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>

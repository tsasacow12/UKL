<?php
include("koneksi.php");

if (!isset($_GET['id_info'])) {
    header("location: index3.php");
    exit;
}

$id = $_GET['id_info'];

$sql = "$sql = "SELECT informasi_makanan.info_makanan, informasi_makanan.manfaat, makanan.id_makanan, makanan.nama_makanan
FROM informasi_makanan
INNER JOIN makanan ON informasi_makanan.id_makanan = makanan.id_makanan
WHERE informasi_makanan.id_info = '$id'";
";

$result = mysqli_query($mysqli, $sql);

$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Data tidak ditemukan.";
    exit;
}

$nama_makanan = $row['nama_makanan'];
$kalori = $row['informasi_makanan'];
$berat = $row['manfaat'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Informasi Makanan</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Informasi Makanan</h3>
    </header>
    <form method="POST" action="edit_proses2.php">
        <table border="0">
            <tr> 
                <td>Nama Makanan</td>
                <td><input type="text" name="nama_makanan" value="<?php echo $nama_makanan; ?>"></td>
            </tr>
            <tr> 
                <td>Informasi Makanan</td>
                <td><input type="text" name="info_makanan" value="<?php echo $kalori; ?>"></td>
            </tr>
            <tr> 
                <td>Manfaat</td>
                <td><input type="text" name="manfaat" value="<?php echo $berat; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_info" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>

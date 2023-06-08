<?php
include("koneksi.php");

if (!isset($_GET['id_makanan'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id_makanan'];

$sql = "SELECT * FROM makanan WHERE id_makanan='$id'";

$result = mysqli_query($mysqli, $sql);

$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Data tidak ditemukan.";
    exit;
}

$nama = $row['nama_makanan'];
$kategori = $row['kategori_makanan'];
$stock = $row['porsi'];
$hrg = $row['kalori'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>
    <form method="POST" action="edit_proses.php">
        <table border="0">
            <tr> 
                <td>nama_makanan</td>
                <td><input type="text" name="nama_makanan" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>kategori_makanan</td>
                <td><input type="text" name="kategori_makanan" value="<?php echo $kategori;?>"></td>
            </tr>
            <tr> 
                <td>porsi</td>
                <td><input type="text" name="porsi" value="<?php echo $stock;?>"></td>
            </tr>
            <tr> 
                <td>kalori</td>
                <td><input type="text" name="kalori" value="<?php echo $hrg;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_makanan" value=<?php echo $_GET['id_makanan'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>






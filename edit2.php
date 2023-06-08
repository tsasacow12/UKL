<?php
include("koneksi.php");

if (!isset($_GET['id_olahraga'])) {
    header("location: index2.php");
    exit;
}

$id = $_GET['id_olahraga'];

$sql = "SELECT * FROM olahraga WHERE id_olahraga='$id'";

$result = mysqli_query($mysqli, $sql);

$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo "Data tidak ditemukan.";
    exit;
}

$nama = $row['nama_olahraga'];
$kategori = $row['jenis_olahraga'];
$stock = $row['kalor_terbuang'];
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
    <form method="POST" action="proses_edit.php">
        <table border="0">
            <tr> 
                <td>nama_olahraga</td>
                <td><input type="text" name="nama_olahraga" value="<?php echo $nama;?>"></td>
            </tr>
            <tr> 
                <td>jenis_olahraga</td>
                <td><input type="text" name="jenis_olahraga" value="<?php echo $kategori;?>"></td>
            </tr>
            <tr> 
                <td>kalori_terbuang</td>
                <td><input type="text" name="kalori_terbuang" value="<?php echo $stock;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_olahraga" value=<?php echo $_GET['id_olahraga'];?>></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>
    </body>
</html>






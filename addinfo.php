<!DOCTYPE html>
<html>
<head>
    <title>Create Data Baru</title>
</head>
<body>
    <h1>Create Data Baru</h1>

    <h3>Data info makanan</h3>
    <form method="post" action="addinfo.php" enctype="multipart/form-data">
        <table>
            <tr> 
                <td>git  nama makanan</td>
                <td><input type="text" id="nama_makanan" name="nama_makanan"></td>
            </tr>
            <tr> 
                <td>informasi makanan</td>
                <td><input type="text" id="info_makanan" name="info_makanan"></td>
            </tr>
            <tr> 
                <td>manfaat</td>
                <td><input type="text" id="manfaat" name="manfaat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $nama_makanan = $_POST['nama_makanan'];
        $info_makanan = $_POST['info_makanan'];
        $manfaat = $_POST['manfaat'];
        
        // include database connection file
        include_once("koneksi.php");
        
        // Insert user data into table
        $result = mysqli_query($mysqli, 
            "INSERT INTO informasi_makanan(nama_makanan, info_makanan, manfaat) 
             VALUES ('$nama_makanan', '$info_makanan', '$manfaat')");
        
        if ($result) {
            header("Location: index3.php");
            exit;
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>

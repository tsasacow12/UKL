<!DOCTYPE html>
<html>
<head>
    <title>Create Data Baru</title>
</head>
<body>
    <h1>Create Data Baru</h1>

    <h3>Data olahraga</h3>
    <form method="post" action="addolga.php" enctype="multipart/form-data">
        <table>
            <tr> 
                <td>nama olahraga</td>
                <td><input type="text" id="nama_olahraga" name="nama_olahraga"></td>
            </tr>
            <tr> 
                <td>jenis olahraga</td>
                <td><input type="text" id="jenis_olahraga" name="jenis_olahraga"></td>
            </tr>
            <tr> 
                <td>kalori terbuang</td>
                <td><input type="text" id="kalori_terbuang" name="kalori_terbuang"></td>
            </tr>
           
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $nama_olahraga = $_POST['nama_olahraga'];
        $jenis_olahraga = $_POST['jenis_olahraga'];
        $kalori_terbuang = $_POST['kalori_terbuang'];
        
        // include database connection file
        include_once("koneksi.php");
        
        // Insert user data into table
        $result = mysqli_query($mysqli, 
            "INSERT INTO olahraga(nama_olahraga, jenis_olahraga, kalori_terbuang) 
            VALUES ('$nama_olahraga', '$jenis_olahraga', '$kalori_terbuang')");
        
        if ($result) {
            header("Location: index2.php");
            exit;
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>

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
                <td>defisit</td>
                <td>
                    <select name="id_defisit" id="id_defisit">
                        <option disabled selected> Pilih </option>
                        <?php 
                        include_once("koneksi.php");
                        $query_mysql = mysqli_query($mysqli, "SELECT * FROM defisit_kalori") or die(mysqli_error());
                        while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                            <option value="<?php echo $data['id_defisit']; ?>"><?php echo $data['id_defisit']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
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
        $defisit = $_POST['id_defisit'];
        $nama = $_POST['nama_olahraga'];
        $jenis_olahraga = $_POST['jenis_olahraga'];
        $kalori_terbuang = $_POST['kalori_terbuang'];
        
        // include database connection file
        include_once("koneksi.php");
        
        // Insert user data into table
        $result = mysqli_query($mysqli, 
            "INSERT INTO olahraga (id_defisit, nama_olahraga, jenis_olahraga, kalori_terbuang) 
            VALUES ('$defisit', '$nama', '$jenis_olahraga', '$kalori_terbuang')");
        
        if ($result) {
            header("Location: index2.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>

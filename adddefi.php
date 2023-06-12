<!DOCTYPE html>
<html>
<head>
    <title>Create Data Baru</title>
</head>
<body>
    <h1>Create Data Baru</h1>

    <h3>Data defisit</h3>
    <form method="post" action="adddefi.php" enctype="multipart/form-data">
        <table>
            <tr> 
                <td>nama makanan</td>
                <td><input type="text" id="id_defisit" name="nama_makanan"></td>
            </tr>
            <tr> 
                <td>kalori</td>
                <td><input type="text" name="kalori" value="<?php echo isset($kalori) ? $kalori : ''; ?>"></td>
            </tr>
            <tr> 
                <td>berat</td>
                <td><input type="text" name="berat" value="<?php echo isset($berat) ? $berat : ''; ?>"></td>
            </tr>
            <tr> 
                <td>karbohidrat</td>
                <td><input type="text" name="karbohidrat" value="<?php echo isset($karbohidrat) ? $karbohidrat : ''; ?>"></td>
            </tr>
            <tr> 
                <td>lemak</td>
                <td><input type="text" name="lemak" value="<?php echo isset($lemak) ? $lemak : ''; ?>"></td>
            </tr>
            <tr> 
                <td>protein</td>
                <td><input type="text" name="protein" value="<?php echo isset($protein) ? $protein : ''; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama_makanan'];
        $kalori = $_POST['kalori'];
        $berat = $_POST['berat'];
        $karbohidrat = $_POST['karbohidrat'];
        $lemak = $_POST['lemak'];
        $protein = $_POST['protein'];
        
        
        // include database connection file
        include_once("koneksi.php");
        
        // Insert user data into table
        $result = mysqli_query($mysqli, 
            "INSERT INTO defisit_kalori (nama_makanan, kalori, berat, karbohidrat, lemak, protein) 
            VALUES ('$nama', '$kalori', '$berat', '$karbohidrat', '$lemak', '$protein')");
        
        if ($result) {
            header("Location: index3.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($mysqli);
        }
    }
    ?>
</body>
</html>

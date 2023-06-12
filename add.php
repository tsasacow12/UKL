<?php
include("koneksi.php");
// $nama_barang = mysqli_real_escape_string($mysqli, $_POST['nama']);
// $stok = mysqli_real_escape_string($mysqli, $_POST['kategori']);
// $harga = mysqli_real_escape_string($mysqli, $_POST['porsi']);
// $kategori = mysqli_real_escape_string($mysqli, $_POST['kalori']);

// $query = "INSERT INTO makanan (nama_makanan, kategori_makanan, porsi, kalori) VALUES ('$nama_barang', '$stok', '$harga', '$kategori')";

// $result = mysqli_query($mysqli, $query); // Menjalankan pernyataan SQL

// if ($result) {
//     header("location: index.php");
// } else {
//     echo "Gagal menambahkan data: " . mysqli_error($mysqli);
// }

// mysqli_close($mysqli); // Menutup koneksi ke database
?>

<html>
<head>
    <h1>Create Data Baru</h1>
</head>
<body>
<?php include("sidebar.php"); ?>
    <h3>Data buku</h3>
    <form method="post" action="add.php" enctype="multipart/form-data">
        <table>
            <tr> 
                <td>nama</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr> 
                <td>kategori</td>
                <td><input type="text" id="kategori" name="kategori"></td>
            </tr>
            <tr> 
                <td>porsi</td>
                <td><input type="text" id="porsi" name="porsi"></td>
            </tr>
            <!-- <tr>
                <td>gambar</td>
                <td><input type="file" name="gambar_barang"></td>
            </tr> -->
           


            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['Submit'])) {
            $nama= $_POST['nama'];
            $kategori = $_POST['kategori'];
            $porsi = $_POST['porsi'];
            echo($nama);
            // include database connection file
            include_once("koneksi.php");
                    
            // Insert user data into table
            $result = mysqli_query($mysqli, 
            "INSERT INTO makanan(nama_makanan,kategori_makanan,porsi) 
            VALUES('$nama','$kategori','$porsi')");
    
            
            // Show message when user added
           // echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
            header("location:index.php");
    
        }    
    ?>
</body>
</html>

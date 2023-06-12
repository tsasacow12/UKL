<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<body>
    <h1>Menampilkan Tabel</h1>
    <h3>Olahraga</h3>
    <button class="btn">
        <a href="addinfo.php">Add new user</a>
    </button>

    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama Makanan</th>
            <th>Informasi Makanan</th>
            <th>Manfaat</th>
            <th>Kontrol</th>
        </tr>
        <?php 
        include "koneksi.php";
        $query_mysql = "SELECT informasi_makanan.info_makanan, informasi_makanan.manfaat, makanan.id_makanan, makanan.nama_makanan
         FROM informasi_makanan INNER JOIN makanan
         ON informasi_makanan.id_makanan = makanan.id_makanan";
        $nomor = 1;
        $result = mysqli_query($mysqli, $query_mysql);
        while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama_makanan']; ?></td>
            <td><?php echo $data['info_makanan']; ?></td>
            <td><?php echo $data['manfaat']; ?></td>
            <td>
                <a href="edit3.php?id_info=<?php echo $data['id_info']; ?>">Edit</a>
                <a href="delete2.php?id_info=<?php echo $data['id_info']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <h1>menampilkan tabel</h1>
    </head>

    <body>
        <h3>makanan</h3>
        <table border="1" class="table">
            <tr>
                <th>id makanan</th>
                <th>id userdi</th>
                <th>nama makanan</th>
                <th>kategori makanan</th>
                <th>porsi</th>
                <th>kalori</th>
            </tr>
            <?php
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM makanan")or die(mysqli_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
       ?>
            <tr>
                <td><?php echo $data ['id_makanan']; ?></td>
                <td><?php echo $data ['id_userdi']; ?></td>
                <td><?php echo $data ['nama_makanan']; ?></td>
                <td><?php echo $data ['kategori_makanan']; ?></td>
                <td><?php echo $data ['porsi']; ?></td>
                <td><?php echo $data ['kalori']; ?></td>
            </tr>
            <?php } ?>

        </table>
        
    </body>
</html>

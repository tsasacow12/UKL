<!DOCTYPE html>
<html>
    <head>
        <h1>menampilkan tabel</h1>
    </head>

    <body>
        <h3>makanan</h3>
        <table border="1" class="table">
            <tr>
                <th>id_makanan</th>
                <th>nama_makanan</th>
                <th>kategori_makanan</th>
                <th>porsi</th>
                <th>kalori</th>
            </tr>
            <?php
            include "connect1.php";
            $query_mysql = mysqli_query($mysqli,"SELECT * FROM makanan")or die(mysqli_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
       ?>
            <tr>
                <td><?php echo $data ['id_makanan']; ?></td>
                <td><?php echo $data ['nama_makanan']; ?></td>
                <td><?php echo $data ['kategori_makanan']; ?></td>
                <td><?php echo $data ['porsi']; ?></td>
                <td><?php echo $data ['kalori']; ?></td>
            </tr>
            <?php } ?>

        </table>
        
    </body>
</html>

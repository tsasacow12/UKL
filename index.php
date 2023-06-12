<!DOCTYPE html>
<html>
    <head>
		<title>admin</title>
        <link rel="stylesheet" href="style2.css">
    </head>

    <body>
    <?php include("sidebar.php"); ?>
        <header>
        <button class="btn">
			<a href="add.php">Add new user</a><br/><br/>
		</button>
        </header>
        <table class="table">
            <tr>
                <th>No</th>
                <th>nama makanan</th>
                <th>kategori makanan</th>
                <th>porsi</th>
                <th>kalori</th>
                <th>kontrol</th>
            </tr>
            <?php 
	include "koneksi.php";
	$query_mysql = "SELECT * FROM makanan";
	$nomor = 1;

    $result = mysqli_query($mysqli, $query_mysql);
	while($data = mysqli_fetch_array($result)){
	?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data ['nama_makanan']; ?></td>
                <td><?php echo $data ['kategori_makanan']; ?></td>
                <td><?php echo $data ['porsi']; ?></td>
                <td><?php echo $data ['kalori']; ?></td>

                <td><a href = "edit.php?id_makanan=<?php echo $data['id_makanan'];?>">edit</a>
                    <a href="delete.php?id_makanan=<?php echo $data['id_makanan'];?>">delete</a>
                </td>
            </tr>
            <?php } ?>

        </table>
        
    </body>
    
</html>


<!DOCTYPE html>
<html>
    <head>
		<title>admin</title>
        <h1>menampilkan tabel</h1>
        <link rel="stylesheet" href="style5.css">
    </head>

    <body>
    <h3>olahraga</h3>
        <button class="btn">
			<a href="addolga.php">Add new user</a><br/><br/>
		</button>

        <table class="table">
            <tr>
                <th>No</th>
                <th>nama olahraga</th>
                <th>jenis olahraga</th>
                <th>kalori terbuang</th>
                <th>kontrol</th>
            </tr>
            <?php 
	include "koneksi.php";
	$query_mysql = "SELECT * FROM olahraga";
	$nomor = 1;

    $result = mysqli_query($mysqli, $query_mysql);
	while($data = mysqli_fetch_array($result)){
	?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data ['nama_olahraga']; ?></td>
                <td><?php echo $data ['jenis_olahraga']; ?></td>
                <td><?php echo $data ['kalori_terbuang']; ?></td>

                <td><a href = "edit2.php?id_olahraga=<?php echo $data['id_olahraga'];?>">edit</a>
                    <a href="delete2.php?id_olahraga=<?php echo $data['id_olahraga'];?>">delete</a>
                </td>
            </tr>
            <?php } ?>

        </table>
        
    </body>
</html>


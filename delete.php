<?php
include_once("koneksi.php");

if (isset($_GET["id_makanan"])) {
    $id_makanan = $_GET["id_makanan"];

    $sql = "DELETE FROM makanan WHERE id_makanan = '$id_makanan'";
    $result = mysqli_query($mysqli,$sql);
}
 header("location:index.php");

?>
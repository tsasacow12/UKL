<?php
include_once("koneksi.php");

if (isset($_GET["id_olahraga"])) {
    $id_olga = $_GET["id_olahraga"];

    $sql2 = "DELETE FROM olahraga WHERE id_olahraga = '$id_olga'";
    $result = mysqli_query($mysqli,$sql2);
}
 header("location:index2.php");

?>
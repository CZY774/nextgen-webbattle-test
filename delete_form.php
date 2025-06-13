<?php
    include "config.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM menus WHERE id='$id'";
        $query = mysqli_query($db, $sql);

        if($query) {
            header("Location: menu_list.php?status=sukses");
        } else {
            die("Gagal menghapus data: " . mysqli_error($db));
        }
    } else {
        die("Akses tidak diizinkan.");
    }
?>
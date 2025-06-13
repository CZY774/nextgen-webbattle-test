<?php
    include "config.php";

    if(!isset($_POST['save'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];

        $sql = "UPDATE menus SET name='$name' WHERE id='$id'";
        $query = mysqli_query($db, $sql);

        if($query) {
            header("Location: menu_list.php?status=sukses");
        } else {
            die("Gagal menyimpan perubahan: " . mysqli_error($db));
        }
    } else {
        die("Akses tidak diizinkan.");
    }
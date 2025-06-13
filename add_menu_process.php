<?php
include "config.php";
if(isset($_POST['daftar'])) {
    $name = $_POST['name'];
    $userId = 1;

    $sql = "INSERT INTO menus (name, user_id, created_at) VALUES ('$name', '$userId', now())";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang");
}
?>
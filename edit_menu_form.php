<?php
    include "config.php";

    if(!isset($_GET['id'])) {
        header("Location: menu_list.php");
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM menus WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    $menu = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) < 1) {
        die("Data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGWB PHP MySQL</title>
</head>
<body>
    <header>
        <h1>Formulir Edit Menu</h1>
    </header>

    <form action="edit_menu_process.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $menu['id'] ?>">
            <p>
                <label for="name">Nama: </label>
                <input type="text" name="name" id="name" value="<?php echo $menu['name'] ?>" required>
            </p>
            <p>
                <input type="submit" value="Save" name="save">
            </p>
        </fieldset>
    </form>
</body>
</html>
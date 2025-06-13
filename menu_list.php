<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGWB PHP MySQL</title>
</head>
<body>
    <header>
        <h1>Daftar Menu</h1>
    </header>

    <nav>
        <a href="add_menu_form.php">[+] Tambah Menu</a>
    </nav>

    <br>

    <table border=1 class="menu">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>User Input</th>
                <th>Dibuat pada</th>
                <th>Diubah pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT menus.*, users.name as user_name FROM menus inner join users on menyus.user_id=users.id";
            $query = mysqli_query($db, $query);

            while($menu = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$menu['id']."</td>";
                echo "<td>".$menu['name']."</td>";
                echo "<td>".$menu['user_name']."</td>";
                echo "<td>".$menu['created_at']."</td>";
                echo "<td>".$menu['updated_at']."</td>";
                echo "<td>";
                echo "<a class='fcc-btn1'href='edit_menu_form.php?id=".$menu['id']."'>Edit</a> | ";
                echo "<a class='fcc-btn2' href='delete_menu.php?id=".$menu['id']. "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Total: <?php echo mysqli_num_rows($query) ?></h3>
</body>
</html>
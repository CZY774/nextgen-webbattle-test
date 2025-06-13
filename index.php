<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGWB PHP MySQL</title>
</head>
<body>
    <header>
        <h2>Menu Restoran</h2>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="add_menu_form.php">Daftar Baru Menu</a></li>
            <li><a href="menu_list.php">List Daftar Menu</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
        if($_GET['status'] == 'sukses') {
            echo "<div style='color: green;'>Menu berhasil ditambahkan!</div>";
        } elseif($_GET['status'] == 'gagal') {
            echo "<div style='color: red;'>Menu gagal ditambahkan!</div>";
        }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>
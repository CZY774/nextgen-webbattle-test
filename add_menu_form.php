<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGWP PHP MySQL</title>
</head>
<body>
    <header>
        <h1>Formulir Pendaftaran Menu Baru</h1>
    </header>
    <div>
        <form action="add_menu_process.php" method="POST">
            <fieldset>
                <p>
                    <label for="name">Nama </label>
                    <input type="text" name="name" placeholder="Nama" id="">
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar">
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
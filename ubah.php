<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="case">
        <h1 class="h1">Ubah Data Mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_mahasiswa" value="<?= $mhs["id_mahasiswa"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
                </li>
                <li>
                    <label for="npm">Npm :</label>
                    <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar :</label><br>
                    <img class="img" src="img/<?= $mhs['gambar']; ?>" alt="gambar">
                    <input type="file" name="gambar" id="gambar" placeholder="<?= $mhs['gambar']; ?>">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="case">
        <h1 class="h1">Tambah Data Mahasiswa</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="npm">Npm :</label>
                    <input type="text" name="npm" id="npm" required="">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" required="">
                </li>
                <li>
                    <label for="jurusan">Jurusan :</label>
                    <input type="text" name="jurusan" id="jurusan">
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input type="file" name="gambar" id="gambar" placeholder="gambar">
                </li>
                <br>
                <li>
                    <button type="submit" name="submit">Tambah Data!</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>
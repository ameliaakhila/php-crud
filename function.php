<?php
// koneksi ke DBMS
// koneksi ke dalam database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    
}


function upload()
{
    
}


function hapus($id_mahasiswa)
{
    
}


function ubah($data)
{
    
}


function cari($keyword)
{
    
}


function registration($data)
{
    
}

?>
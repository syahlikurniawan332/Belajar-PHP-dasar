<?php

function tampil($row) {
    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <=$i; $j++) {
            echo "*";
        }
        echo "<br />";
    }
    for ($i = $row - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br />";
    }
}

function pola($row) {
    // membuat baris baru tiap perulangan
    for ($i = 1; $i <= $row; $i++) {
        // membuat spasi di awal
        for ($k=$row; $k >= $i + 1; $k--){
            echo "_";
        }
        // buat bintang kelipatan 2 tiap perulangan
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // membuat baris baru tiap perulangan
    for ($i = $row - 1; $i >= 1; $i--){
        // membuat spasi di awal
        for ($k=$row; $k >= $i + 1; $k--){
            echo "_";
        }
        // membuat bintang kelipatan 2 tiap perulangan
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// function buat nambah data
function tambah ($data) {
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $kelas = htmlspecialchars($data['kelas']);
    $nilai = htmlspecialchars($data['nilai']);

    $rows = [
        'gambar' => $gambar,
        'nama' => $nama,
        'kelas' => $kelas,
        'nilai' => $nilai
    ];
    
    $_SESSION['data'] = $rows;
    header("location : index.php");
    exit();
}

function ubah($id, $gambar, $nama, $kelas, $nilai)
{
    if (isset($_SESSION['data'][$id])) {
        $_SESSION['data'][$id] = [
            'gambar' => $gambar,
            'nama' => $nama,
            'kelas' => $kelas,
            'nilai' => $nilai
        ];
    }
}

function hapus($id)
{
    if (isset($_SESSION['data'][$id])) {
        unset($_SESSION['data'][$id]);
        // array_values berfungsi mengatur ulang kunci, mengubah array asosiatif menjadi array yang diindeks, dan menghapus nilai duplikat saat mengindeks ulang.
        $_SESSION['data'] = array_values($_SESSION['data']);
    }
}

function cari($keyword)
{
    $data = baca();
    // array_filter : memfilter elemen array menggunakan fungsi panggilan balik.
    return array_filter($data, function ($item) use ($keyword) {
        // strpos : fungsi untuk mencari posisi string
        return strpos($item['nama'], $keyword) !== false || strpos($item['kelas'], $keyword) !== false || strpos($item['nilai'], $keyword) !== false;
    });
}
?>
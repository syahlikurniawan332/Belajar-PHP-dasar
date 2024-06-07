<?php

function tampilBintang($batas){
    for ($i = 1; $i <= $batas; $i++){
        echo '*';
    }
}

function tampilUnderscore($batas){
    for ($i = 1; $i <= $batas; $i++){
        echo '_';
    }
}


function tambah($data)
{
    // mengamankan data yang dikirim dari form
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $kelas = htmlspecialchars($data['kelas']);
    $nilai = htmlspecialchars($data['nilai']);

    //pengecekan kelulusan
    $hasil = ($nilai > 60) ? "Lulus" : "Gagal";

    // simpan dalam variabel array assoc
    $rows = [
        'nama' => $nama,
        'gambar' => $gambar,
        'kelas' => $kelas,
        'nilai' => $nilai,
        'hasil' => $hasil
    ];

    // cek apakah session sudah ada, jika belum buat jadi array kosong
    if (!isset($_SESSION['data'])) {
        $_SESSION['data'] = [];
    }

    // simpan hasil form di araay data dalam variabel session global 
    $_SESSION['data'][] = $rows;

    // pindahkan ke lokasi utama
    header("Location: index.php");
    exit();
}

function hapus($id)
{
    if (isset($_SESSION['data'][$id])) {
        unset($_SESSION['data'][$id]);
    }
}

function ubah($data)
{
    // menangkap kirim dari form
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $kelas = htmlspecialchars($data['kelas']);
    $nilai = htmlspecialchars($data['nilai']);

    //pengecekan kelulusan
    $hasil = ($nilai > 60) ? "Lulus" : "Gagal";

    // simpan dalam variabel array assoc
    $rows = [
        'nama' => $nama,
        'gambar' => $gambar,
        'kelas' => $kelas,
        'nilai' => $nilai,
        'hasil' => $hasil
    ];

    // Periksa apakah ID tersedia
    if (isset($_SESSION['data'][$id])) {
        // Jika ID tersedia, update data dengan ID yang diberikan
        $_SESSION['data'][$id] = $rows;
    } else {
        // Jika ID tidak tersedia, tambahkan data baru
        $_SESSION['data'][] = $rows;
    }

    // Pindahkan ke lokasi utama
    header("Location: index.php");
    exit();
}

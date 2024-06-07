<?php



function tambah($data)
{

    $nama = $data['nama'];
    $kelas = $data['kelas'];
    $nilai = $data['nilai'];

    $siswa = [
        'nama' => $nama,
        'kelas' => $kelas,
        'nilai' => $nilai
    ];

    $_SESSION['data'][] = $siswa;

    header("Location: index.php");
    exit();
}


function baca()
{
    return isset($_SESSION['data']) ? $_SESSION['data'] : [];
}

function hapus($id)
{
    if (isset($_SESSION['data'][$id])) {
        unset($_SESSION['data'][$id]);
        // array_values berfungsi mengatur ulang kunci, mengubah array asosiatif menjadi array yang diindeks, dan menghapus nilai duplikat saat mengindeks ulang.
        $_SESSION['data'] = array_values($_SESSION['data']);
    }
}

function ubah($id, $nama, $kelas, $nilai)
{
    if (isset($_SESSION['data'][$id])) {
        $_SESSION['data'][$id] = [
            'nama' => $nama,
            'kelas' => $kelas,
            'nilai' => $nilai
        ];
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

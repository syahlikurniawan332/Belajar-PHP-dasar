<?php
// Koneksi ke database
function connectDB()
{
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}

// Mengambil data films dari database
function query($query)
{
    $conn = connectDB();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_close($conn);
    return $rows;
}

function tambah($data)
{
    $conn = connectDB();
    // Ambil data dari setiap elemen dalam form
    $judul = htmlspecialchars($data["judul"]);
    $tahun_rilis = htmlspecialchars($data["tahun_rilis"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $genre = htmlspecialchars($data["genre"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // Query untuk menambahkan data film baru ke database
    $query = "INSERT INTO films (judul, tahun_rilis, sutradara, genre, gambar) VALUES ('$judul', '$tahun_rilis', '$sutradara', '$genre', '$gambar')";
    mysqli_query(connectDB(), $query);

    //cek apakah gagal atau tidak
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = connectDB();
    mysqli_query($conn, "DELETE FROM films WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $id = $data['id'];
    $conn = connectDB();
    $judul = htmlspecialchars($data["judul"]);
    $tahun_rilis = htmlspecialchars($data["tahun_rilis"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $genre = htmlspecialchars($data["genre"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    $gambar = htmlspecialchars($data["gambar"]);
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    mysqli_query($conn, "UPDATE films SET 
    judul = '$judul',
    tahun_rilis = '$tahun_rilis',
    sutradara = '$sutradara',
    genre = '$genre',
    gambar = '$gambar'
    WHERE id = $id
    ");

    //cek apakah gagal atau tidak
    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * FROM films WHERE 
    judul LIKE '%$keyword%' OR 
    tahun_rilis LIKE '%$keyword%' OR 
    sutradara LIKE '%$keyword%' OR 
    genre LIKE '%$keyword%'
    ";
    return query($query);
}


function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar diupload
    if ($error === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu');</script>";
        return false;
    }

    // cek apakah itu gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar');</script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama baru agar tidak ada yang sama
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}


function register($data)
{
    $conn = connectDB();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_array($result)) {
        echo "<script>
        alert('nama sudah terdaftar');
        </script>";
        return false;
    }

    // cek password dengan konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Password tidak sama dengan konfirmasi password');</script>";
        return false;
    }


    // amankan password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke tabel users
    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    return mysqli_affected_rows($conn);
}

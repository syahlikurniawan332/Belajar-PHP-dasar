<?php
// Koneksi ke database
function connectDB() {
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}

// Mengambil data films dari database
function query($query) {
    $conn = connectDB();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    mysqli_close($conn);
    return $rows;
}
?>

<?php 
// array 
// dapat menyimpan banyak nilai 
// bisa menyimpan lebih dari 1 tipe data 
// isi array seputar key dan value 
// elemen array dihitung sebagai index dan dimulai dari 0 


// cara lama 
$data = array (1,2,3,4,5);

// cara baru 
$mhs = ["mhs1","mhs2","mhs3"];
$hasil = [true, 1, "success"];

// menampilkan untuk dev 
var_dump($data);
echo "<br>";
print_r($mhs);
echo "<br>";
print_r($hasil);

// menampilkan 1 isi array sesuai index 
echo $mhs[1];
echo "<br>";
echo $hasil[2];
echo "<br>";

// menambah nilai array 
$mhs[] = "mhs4";
print_r($mhs);

?>
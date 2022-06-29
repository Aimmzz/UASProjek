<?php

$connection = mysqli_connect("localhost", "root", "","projectpos");
// function query($query) {
//     global $conn;
//     $result = mysqli_query($connection, $query);
//     $rows = [];
//     while($data = mysqli_fetch_assoc($result)) {
//         $data[] = $data;
//     }
//     return $rows; 
// }



//     function detail($data){
//         global $connection;
    
//         $id = $data["id_barang"];
//         $nama = htmlspecialchars($_POST["nama_barang"]);
//         $kategori = htmlspecialchars($_POST["id_kategori"]);
//         $harga = htmlspecialchars($_POST["harga"]);
//         $gambar = htmlspecialchars($_POST["foto"]);
//         $ukuran = htmlspecialchars($_POST["ukuran"]);

//         mysqli_query($connection, $query);
//         return mysqli_affected_rows($connection);
//     }
    
?>
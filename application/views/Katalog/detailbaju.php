 <?php  
include "coba.php";

// $id_barang = $_GET['id_barang'];
$query = mysqli_query($connection, "SELECT * FROM barang WHERE id_barang = '$id_barang' ");
// $data = mysqli_fetch_array($query);
echo $id_barang;

 if(mysqli_num_rows($query)>0){ 
    
        while($data = mysqli_fetch_array($query)){
    echo "<b>Id</b> : " . $data['id_barang'] . "<br>";
    echo "<b>Nama</b> : " . $data['nama_barang'] . "<br>";
    echo "<b>Jenis Kelamin</b> : " . $data['harga'] . "<br>";
    echo "<b>Alamat</b> : " . $data['id_kategori']. "<br>";
            
        }
    }



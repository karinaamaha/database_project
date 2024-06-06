<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $nama_layanan = htmlspecialchars($_POST["nama_layanan"]);
    $harga_layanan = htmlspecialchars($_POST["harga_layanan"]);

    $query = "INSERT INTO info_layanan  VALUES ('$nama_layanan',$harga_layanan)";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../index.php';
        </script>
        ";
    }
    
}

?>




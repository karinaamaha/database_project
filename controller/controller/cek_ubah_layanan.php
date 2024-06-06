<?php 
include '../connection.php';

if(isset($_POST["ubah"])){
    $nama_layanan = $_POST["nama_layanan"];
    $harga_layanan = $_POST["harga_layanan"];


    $query = "UPDATE info_layanan SET
            harga_layanan = $harga_layanan
            WHERE nama_layanan='$nama_layanan'";
    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            // document.location.href='../index.php';
            
        </script>";
        echo mysqli_error($conn);
        
    }
}

?>
<?php 
include '../connection.php';

$nama_layanan = $_GET["nama_layanan"];

mysqli_query($conn, "DELETE FROM info_layanan WHERE nama_layanan='$nama_layanan'");

if(mysqli_affected_rows($conn)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../index.php';
    
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = '../index.php';
    </script>
    ";


}
?>
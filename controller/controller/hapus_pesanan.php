<?php 
include '../connection.php';

$id_pesanan = $_GET["id_pesanan"];

mysqli_query($conn, "DELETE FROM info_pesanan WHERE id_pesanan=$id_pesanan");

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
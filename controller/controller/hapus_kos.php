<?php 
include '../connection.php';

$nomor = $_GET["no_kos"];

mysqli_query($conn, "DELETE FROM info_kos WHERE no_kos=$nomor");

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
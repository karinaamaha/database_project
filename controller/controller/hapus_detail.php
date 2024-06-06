<?php 
include '../connection.php';

$id_penghuni = $_GET["id_penghuni"];

mysqli_query($conn, "DELETE FROM penghuni WHERE id_penghuni=$id_penghuni");

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
        alert('data gagal dihapus. Mungkin penghuni masih mememiliki tunggakan atau memesan layanan');
        document.location.href = '../index.php';
    </script>
    ";


}
?>
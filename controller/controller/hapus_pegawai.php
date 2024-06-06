<?php 
include '../connection.php';

$id_pegawai = $_GET["id_pegawai"];

mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai=$id_pegawai");

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
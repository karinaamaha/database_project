<?php 
include '../connection.php';

$no_tagihan = $_GET["no_tagihan"];

mysqli_query($conn, "DELETE FROM tagihan WHERE no_tagihan=$no_tagihan");

if(mysqli_affected_rows($conn)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = '../kelola_tagihan.php';
    
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        // document.location.href = '../kelola_tagihan.php';
    </script>
    ";
    echo mysqli_error($conn);


}
?>
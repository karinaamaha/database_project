<?php 
include '../connection.php';

if(isset($_POST["ubah"])){
    $no_kos = $_POST["no_kos"];
    $lantai = $_POST["lantai"];
    $fasilitas = $_POST["fasilitas"];
    $detail_fasilitas = $_POST["detail_fasilitas"];
    $harga = $_POST["harga"];


    $query = "UPDATE info_kos SET
            lantai = $lantai,
            fasilitas = '$fasilitas' 
            WHERE no_kos=$no_kos";
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
            document.location.href='../index.php';
            
        </script>";
        
    }
}

?>
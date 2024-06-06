<?php 
include '../connection.php';

if(isset($_POST["ubah"])){
    $id_penghuni = $_POST["id_penghuni"];
    $nama_penghuni = $_POST["nama_penghuni"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $no_hp = $_POST["no_hp"];
    $no_kos = $_POST["no_kos"];
    $durasi = $_POST["durasi_sewa"];


    $query = "UPDATE penghuni SET
            nama_penghuni = '$nama_penghuni',
            jenis_kelamin = '$jenis_kelamin',
            alamat_penghuni = '$alamat',
            no_hp = '$no_hp',
            no_kos = '$no_kos',
            durasi_sewa = '$durasi'
            WHERE id_penghuni=$id_penghuni";
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
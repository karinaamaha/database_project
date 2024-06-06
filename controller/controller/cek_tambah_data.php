<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $no_kos = htmlspecialchars($_POST["no_kos"]);
    $durasi = htmlspecialchars($_POST["durasi"]);
    $harga = htmlspecialchars($_POST["harga"]);

    $query = "INSERT INTO penghuni (nama_penghuni, jenis_kelamin, alamat_penghuni, no_hp, durasi_sewa, no_kos) VALUES ('$nama','$jenis_kelamin','$alamat', '$no_hp', $durasi, $no_kos)";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../tambah_tagihan.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='../kelola_penghuni.php';
        </script>
        ";
       
    }
    
}

?>




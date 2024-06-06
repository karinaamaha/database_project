<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $nama_layanan = htmlspecialchars($_POST["nama_layanan"]);
    $jumlah_pesanan = htmlspecialchars($_POST["jumlah_pesanan"]);
    $id_penghuni = htmlspecialchars($_POST["id_penghuni"]);
    $id_pegawai = htmlspecialchars($_POST["id_pegawai"]);

    $query = "INSERT INTO info_pesanan  VALUES ('',$jumlah_pesanan,'$nama_layanan', $id_penghuni,$id_pegawai)";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../kelola_pesanan.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            // document.location.href='../kelola_pesanan.php';
        </script>
        ";
        echo mysqli_error($conn);
    }
    
}

?>




<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $nama = htmlspecialchars($_POST["nama"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $gaji = htmlspecialchars($_POST["gaji"]);


    $query = "INSERT INTO pegawai (nama_pegawai, jenis_kelamin, alamat_pegawai, no_hp, gaji) VALUES ('$nama','$jenis_kelamin','$alamat','$no_hp', $gaji)";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            // document.location.href='../index.php';
        </script>
        ";
        echo mysqli_error($conn);
       
    }
    
}

?>




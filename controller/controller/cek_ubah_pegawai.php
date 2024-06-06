<?php 
// session_start();

include '../connection.php';

if(isset($_POST["ubah"])){
    
    $nama = htmlspecialchars($_POST["nama_pegawai"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no_hp"]);
    $gaji = htmlspecialchars($_POST["gaji"]);
    $id = $_POST["id_pegawai"];

    $query = "UPDATE pegawai SET
            nama_pegawai = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            no_hp = '$no_hp',
            alamat_pegawai = '$alamat',
            gaji = $gaji
            WHERE id_pegawai=$id";
    mysqli_query($conn,$query);

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




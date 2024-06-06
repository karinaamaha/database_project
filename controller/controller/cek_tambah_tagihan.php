<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $id_penghuni = htmlspecialchars($_POST["id_penghuni"]);
    $keterangan = htmlspecialchars($_POST["keterangan"]);
    $jlh_tagihan = htmlspecialchars($_POST["jlh_tagihan"]);

    $query = "INSERT INTO tagihan  VALUES ('',$jlh_tagihan,'$keterangan', $id_penghuni)";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='../kelola_tagihan.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            // document.location.href='../kelola_tagihan.php';
        </script>
        ";
        echo mysqli_error($conn);
    }
    
}

?>




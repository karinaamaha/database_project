<?php 
// session_start();

include '../connection.php';

if(isset($_POST["ubah"])){
    $id_penghuni = $_POST["id_penghuni"];
    $keterangan = htmlspecialchars($_POST["keterangan"]);
    $jlh_tagihan = htmlspecialchars($_POST["jlh_tagihan"]);
    
    $no_tagihan = $_POST["no_tagihan"];

    $query = "UPDATE tagihan SET
            keterangan = '$keterangan',
            jlh_tagihan = '$jlh_tagihan'
            WHERE no_tagihan=$no_tagihan";
    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('Tagihan berhasil diperbarui');
            document.location.href='../index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Tagihan gagal diperbarui');
            // document.location.href='../index.php';
        </script>
        ";
        echo mysqli_error($conn);
       
    }
    
}

?>




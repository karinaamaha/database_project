<?php 
// session_start();

include '../connection.php';

if(isset($_POST["tambah"])){
    $no_kos = htmlspecialchars($_POST["no_kos"]);
    $lantai = htmlspecialchars($_POST["lantai"]);
    $fasilitas = htmlspecialchars($_POST["fasilitas"]);

    $query = "INSERT INTO info_kos  VALUES ('$no_kos','$lantai','$fasilitas')";
    mysqli_query($conn, $query) or die (mysqli_error($conn));

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
            document.location.href='../index.php';
        </script>
        ";
    }
    
}

?>




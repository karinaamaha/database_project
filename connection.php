<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "db_final";

$conn = mysqli_connect($server, $user, $pass, $db_name);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function cari($keyword)
{
    $query = "SELECT * FROM penghuni INNER JOIN info_kos using(no_kos) WHERE nama_penghuni LIKE '$keyword%' OR no_kos LIKE '$keyword%'";
    return query($query);
}

?>
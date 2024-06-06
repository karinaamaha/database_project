<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}

include 'connection.php';

$id = $_GET["id_pegawai"];

$pg = query("SELECT * FROM pegawai WHERE id_pegawai = $id")[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/6.15.0/simpleicons.svg">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="css/style_detail.css">
    <title>Detail Pegawai</title>
</head>
<body>
    <header>
       <div class="left_area">
            <h3>Sistem Informasi Kos-kos Kak Sri</h3>  
       </div>

       <div class="right_area">
            <i class="fa-solid fa-bars" id="btn"></i>
       </div>
    </header>

    <div class="sidebar">
        <div class="logo_profile">
            <img src="asset/kosmerah.png " class="logo" alt="" width="200px" >
        </div>
            
        <div class="menu">
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang, Admin</span></p>
            <a href="index.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="tambah_data.php"><i class="fa-solid fa-plus"></i><span>Tambah Pegawai</span></a>
            <a href="controller/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">
        <h1>DETAIL INFORMASI PEGAWAI</h1>
      <table border="0" border-collapse="collapse" width="100%" id="detailTable">
       <tr>
        <td>ID Pegawai</td>
        <td>:</td>
        <td><?php echo $pg["id_pegawai"] ?></td>
       </tr>
       <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $pg["nama_pegawai"] ?></td>
       </tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $pg["jenis_kelamin"] ?></td>
       </tr>
       <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pg["alamat_pegawai"] ?></td>
       </tr>
       <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><?php echo $pg["no_hp"] ?></td>
       </tr>
       <tr>
        <td>Gaji Bulanan</td>
        <td>:</td>
        <td><?php echo $pg["gaji"] ?></td>
       </tr>
      </table>

      <div class="tombol">
        <a href="ubah_pegawai.php?id_pegawai=<?php echo $pg["id_pegawai"]; ?>" id="tbl-ubah"><i class="fa-solid fa-pen-to-square"></i>Ubah Data</a>
        <a href="controller/hapus_pegawai.php?id_pegawai=<?php echo $pg["id_pegawai"]; ?>" id="tbl-hapus"><i class="fa-solid fa-trash-can"></i>Hapus</a>
      </div>
     
    </div>
    
  







    <script src="js/script.js"></script>
</body>
</html>
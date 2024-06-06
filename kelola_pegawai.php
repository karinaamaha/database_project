<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}

include 'connection.php';



$pegawai = query("SELECT * FROM pegawai");


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
    <link rel="stylesheet" href="css/style_penghuni.css">
    <title>Kelola Pegawai</title>
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
            <img src="asset/kosmerah.png " class="logo" alt="" width="100px" >
        </div>
            
        <div class="menu">
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang, Admin</span></p>
            <a href="index.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="kelola_kos.php"><i class="fa-solid fa-house"></i><span>Kelola Kos</span></a>
            <a href="kelola_penghuni.php"><i class="fa-solid fa-person"></i><span>Kelola Penghuni</span></a>
            <a href="kelola_pegawai.php"><i class="fa-solid fa-briefcase"></i><span>Kelola Karyawan</span></a>
            <a href="kelola_layanan.php"><i class="fa-sharp fa-solid fa-bell-concierge"></i><span>Kelola Layanan</span></a>
            <a href="kelola_tagihan.php"><i class="fa-solid fa-money-bill-1-wave"></i><span>Kelola Tagihan</span></a>
            <a href="controller/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>   
        </div> 
    </div>



    <div class="content">
        <div class="tombol-tambah">
         <a href="tambah_pegawai.php" id="tbl-tambah"><i class="fa-solid fa-pen-to-square"></i>Tambah Data</a>
        </div>
      <table border="0" border-collapse="collapse" width="100%" id="tampil">
        <thead>
            <th style="text-align:center">No</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Jenis Kelamin</th>
            <th style="text-align:center">No HP</th>
            <th style="text-align:center">Gaji</th>
            <th style="text-align:center">Aksi</th>
    
        </thead>

        <tbody>
            <?php $i=1 ?>

            <?php foreach($pegawai as $pg) : ?>
            <tr>
                <td style="text-align:center"><?php echo $i; ?></td>
                <td style="text-align:center"><?php echo $pg["nama_pegawai"];?></td>
                <td style="text-align:center"><?php echo $pg["jenis_kelamin"];?></td>
                <td style="text-align:center"><?php echo $pg["no_hp"]; ?></td> 
                <td style="text-align:center"><?php echo $pg["gaji"]; ?></td> 
                <td  class="tabel_aksi" style="text-align:center">
                    <a href="detail_pegawai.php?id_pegawai=<?php echo $pg["id_pegawai"]; ?>" id="tbl-ubah"><i class="fa-solid fa-pen-to-square"></i>Detail</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>



      </table>
     
    </div>
    
  







    <script src="js/script.js"></script>
</body>
</html>
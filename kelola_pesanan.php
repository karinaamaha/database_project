<?php 

session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}
include 'connection.php';

$jumlahDataPerHalaman = 10;
$jumlahData = count(query("SELECT * FROM info_pesanan"));
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);

$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$pesanan = query("SELECT * FROM info_layanan a
                  INNER JOIN info_pesanan b ON a.nama_layanan = b.nama_layanan
                  INNER JOIN penghuni c ON b.id_penghuni = c.id_penghuni
                  INNER JOIN pegawai d  ON b.id_pegawai = d.id_pegawai LIMIT $awalData, $jumlahDataPerHalaman" )



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
    <title>Kelola Pesanan</title>
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
         <a href="tambah_pesanan.php" id="tbl-tambah"><i class="fa-solid fa-pen-to-square"></i>Tambah Data</a>
        </div>
      <table border="0" border-collapse="collapse" width="100%" id="tampil" style="margin-bottom:50px">
        <thead>
            <th style="text-align:center">ID Pesanan</th>
            <th style="text-align:center">Nama Layanan</th>
            <th style="text-align:center">Jumlah Pesanan</th>
            <th style="text-align:center">Nama Pemesan</th>
            <th style="text-align:center">Nama Penerima</th>
            <th style="text-align:center">Harga</th>
            <th style="text-align:center">Aksi</th>
    
        </thead>

        <tbody>
            <?php $i=1 ?>

            <?php foreach($pesanan as $ps) : ?>
            <tr>
                <td style="text-align:center"><?php echo $ps["id_pesanan"]; ?></td>
                <td style="text-align:center"><?php echo $ps["nama_layanan"];?></td>
                <td style="text-align:center"><?php echo $ps["jumlah_pesanan"];?></td>
                <td style="text-align:center"><?php echo $ps["nama_penghuni"]; ?></td> 
                <td style="text-align:center"><?php echo $ps["nama_pegawai"]; ?></td> 
                <td style="text-align:center"><?php echo $ps["jumlah_pesanan"]*$ps["harga_layanan"]; ?></td> 
                <td  class="tabel_aksi" style="text-align:center">
                    <a href="controller/hapus_pesanan.php?id_pesanan=<?php echo $ps["id_pesanan"]; ?>" id="tbl-ubah"><i class="fa-solid fa-pen-to-square"></i>Selesai</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
      </table>


      <?php if($halamanAktif > 1) :?>
      <a href="?halaman=<?php echo $halamanAktif - 1?>" style="font-size:20px;text-decoration:none;color:#098c55">&lt&lt</a>
    <?php endif; ?>
        <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
            <?php if($i== $halamanAktif) :?>
                <a href="?halaman=<?php echo $i ?>" style="background-color:#fff; padding:5px 20px; margin-top:100px;color:#098c55; text-decoration:none; border-radius:5px; border:1px solid #098c55 "><?php echo $i ?></a>

            <?php else :?>
                <a href="?halaman=<?php echo $i ?>" style="background-color:#098c55; padding:5px 20px; margin-top:100px;color:#fff; text-decoration:none; border-radius:5px "><?php echo $i ?></a>
            <?php endif; ?>
            
        <?php endfor; ?>

        <?php if($halamanAktif < $jumlahHalaman) :?>
            <a href="?halaman=<?php echo $halamanAktif + 1?>" style="font-size:20px;text-decoration:none;color:#098c55">&gt&gt</a>
        <?php endif; ?>
     
    </div>
    
  







    <script src="js/script.js"></script>
</body>
</html>
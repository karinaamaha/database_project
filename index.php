<?php 

session_start();

if (!isset($_SESSION['login'])) 
{
    header("Location: login.php");
}
include 'connection.php';
$jumlahPenghuni = count(query("SELECT * FROM penghuni 
                       GROUP BY no_kos"));
                
$jumlahKos = count(query("SELECT * FROM info_kos"));
$jumlahPegawai = count(query("SELECT * FROM pegawai"));
$jumlahTagihan = count(query("SELECT * FROM tagihan"));
$penghuni = count(query("SELECT * FROM penghuni"));
$perempuan = count(query("SELECT * FROM penghuni WHERE jenis_kelamin = 'Perempuan'"));
$lakilaki = count(query("SELECT * FROM penghuni WHERE jenis_kelamin = 'Laki-laki'"));
$pegawai = count(query("SELECT * FROM pegawai"));
$perempuanpeg = count(query("SELECT * FROM pegawai where jenis_kelamin = 'Perempuan'"));
$lakilakipeg = count(query("SELECT * FROM pegawai WHERE jenis_kelamin = 'Laki-laki'"));
$pesanan = count(query("SELECT * FROM info_pesanan"));
$catering = count(query("SELECT * FROM info_pesanan WHERE nama_layanan = 'Catering'"));
$laundry = count(query("SELECT * FROM info_pesanan WHERE nama_layanan = 'Laundry'"));
$tagihan = count(query("SELECT * FROM tagihan"));
$perlubayar = count(query("SELECT * FROM tagihan WHERE keterangan='Perlu Bayar'"));
$selesai = count(query("SELECT * FROM tagihan WHERE keterangan = 'Selesai'"));

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
    <link rel="stylesheet" href="css/style_index.css">
    <title>Home Admin</title>
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
            <a href="tambah_data.php"><i class="fa-solid fa-plus"></i><span>Tambah Penghuni</span></a>
            <a href="controller/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">
     <div class="menu">
        <div class="judul">
            <h2>KELOLA KAMAR KOS</h2>
        </div>
        <p>Total Kamar Kos : <?php echo $jumlahKos ?> </p>
        <p>Total Kamar dihuni : <?php echo $jumlahPenghuni ?></p>
        <p>Total Kamar Kosong : <?php echo $jumlahKos - $jumlahPenghuni?></p>
        <a href="kelola_kos.php">
        <div class="akhir">
            Atur Disini 
            <img src="asset/fast-forward.png" alt="">
        </div>
        </a>
     </div>
     <div class="menu">
        <div class="judul">
            <h2>KELOLA PENGHUNI KOS</h2>
        </div>
        <p>Total Penghuni : <?php echo $penghuni ?></p>
        <p>Perempuan : <?php echo $perempuan ?></p>
        <p>Laki-Laki : <?php echo $lakilaki ?></p>
        <a href="kelola_penghuni.php">
        <div class="akhir">
            Atur Disini 
            <img src="asset/fast-forward.png" alt="">
        </div>
        </a>
     </div>
     <div class="menu">
        <div class="judul">
            <h2>KELOLA PEGAWAI KOS</h2>
        </div>
        <p>Total Pegawai : <?php echo $pegawai ?></p>
        <p>Perempuan : <?php echo$perempuanpeg ?></p>
        <p>Laki-laki : <?php echo $lakilakipeg ?></p>
        <a href="kelola_pegawai.php">
        <div class="akhir">
            Atur Disini 
            <img src="asset/fast-forward.png" alt="">
        </div>
        </a>
     </div>
     <div class="menu">
        <div class="judul">
            <h2>KELOLA LAYANAN KOS</h2>
        </div>
        <p>Total Pesanan : <?php echo $pesanan ?></p>
        <p>Catering : <?php echo $catering?></p>
        <p>Laundry : <?php echo $laundry?></p>
        <a href="kelola_layanan.php">
        <div class="akhir">
            Atur Disini 
            <img src="asset/fast-forward.png" alt="">
        </div>
        </a>
     </div>
     <div class="menu">
        <div class="judul">
            <h2>KELOLA TAGIHAN KOS</h2>
        </div>
        <p>Total Tagihan : <?php echo $tagihan ?></p>
        <p>Perlu Bayar : <?php echo $perlubayar ?></p>
        <p>Selesai : <?php echo $selesai ?></p>
        <a href="kelola_tagihan.php">
        <div class="akhir">
            Atur Disini 
            <img src="asset/fast-forward.png" alt="">
        </div>
        </a>
     </div>
     
    </div>
    
  







    <script src="js/script.js"></script>
</body>
</html>
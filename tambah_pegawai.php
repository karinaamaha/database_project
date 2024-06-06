<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}


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
    <link rel="stylesheet" href="css/style_tambah.css">
    <title>Pegawai | Tambah Pegawai</title>
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
            <a href="kelola_kos.php" ><i class="fa-solid fa-house"></i><span>Kelola Kos</span></a>
            <a href="kelola_penghuni.php"><i class="fa-solid fa-person"></i><span>Kelola Penghuni</span></a>
            <a href="kelola_pegawai.php"><i class="fa-solid fa-briefcase"></i><span>Kelola Karyawan</span></a>
            <a href="kelola_layanan.php"><i class="fa-sharp fa-solid fa-bell-concierge"></i><span>Kelola Layanan</span></a>
            <a href="kelola_tagihan.php"><i class="fa-solid fa-money-bill-1-wave"></i><span>Kelola Tagihan</span></a>
            <a href="controller/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>   
        </div> 
    </div>



    <div class="content">
    <form action="controller/cek_tambah_pegawai.php" method="POST" id="tambah">
        <h1>Tambah Pegawai </h1>
        <table width="80%" id="tambah" border="0">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td ><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="jenis_kelamin">Jenis_Kelamin</label></td>
                <td ><select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">-- pilih --</option>
                    <option value="laki-laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>

                </td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat Lengkap</label></td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10" style="resize:none; width: 103%; height:100px;"></textarea></td>
            </tr>
            <tr>
                <td><label for="no_hp">Nomor HP</label></td>
                <td><input type="text" name="no_hp" id="no_hp" required></td>
            </tr>
            <tr>
                <td><label for="gaji">Gaji</label></td>
                <td><input type="text" name="gaji" id="gaji" required></td>
            </tr>
         
    
        </table>

        <center><button type="submit" name="tambah">Tambah</button></center>
    
    </form>
    </div>
    
  







    <script src="js/script.js"></script>
</body>
</html>
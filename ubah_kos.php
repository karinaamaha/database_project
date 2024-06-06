<?php 

session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}
include 'connection.php';
$no_kos = $_GET["no_kos"];

// $kos = query("SELECT * FROM info_kos WHERE no_kos = $no_kos")[0];


$kos = query("SELECT * FROM info_fasilitas a, info_kos b WHERE b.no_kos = $no_kos AND a.fasilitas = b.fasilitas ")[0];
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
    <title>Kos | Ubah Kos</title>
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
    <form action="controller/cek_ubah_kos.php" method="POST" id="tambah">
        <h1>Ubah Kos </h1>
        <table width="80%" id="tambah" border="0">
        <input type="hidden" name="no_kos" id="no_kos" value="<?php echo $kos["no_kos"]; ?>">
            <tr>
                <td><label for="no_kos">Nomor Kos</label></td>
                <td ><input type="text" name="no_kos" id="no_kos" disabled value="<?php echo $kos["no_kos"] ?>"></td>
            </tr>
            <tr>
                <td><label for="lantai">Lantai</label></td>
                <td ><input type="text" name="lantai" id="lantai" required value="<?php echo $kos["lantai"] ?>"></td>
            </tr>
            <tr>
                <td><label for="fasilitas">Fasilitas</label></td>
                <td ><select name="fasilitas" id="fasilitas">
                    
                    <?php 
                      echo '<option value="'.$kos['fasilitas'].'">'.$kos['fasilitas'].' </option>';
                      echo '<option value="">--pilih--</option>';
                     $sql_kos = mysqli_query($conn, "SELECT * FROM info_fasilitas") or die(mysqli_error($conn)); 
                     
                     while($data_fasilitas = mysqli_fetch_array($sql_kos)){
                        echo '<option value="'.$data_fasilitas['fasilitas'].'">'.$data_fasilitas['fasilitas'].' </option>';
                    }
                    
                    ?>
                </select>

                </td>
            </tr>
         
    
        </table>

        <center><button type="submit" name="ubah">Ubah</button></center>
    
    </form>
    </div>
    


    <script src="js/script.js"></script>
</body>
</html>
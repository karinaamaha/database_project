<?php 
include 'connection.php';
$tagihan = query("SELECT * FROM tagihan 
                INNER JOIN penghuni using(id_penghuni)")
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
    <link rel="stylesheet" href="css/style_print.css">
    <title>Laporan Tagihan</title>
</head>
<body>
    <header>
       <div class="left_area">
            <h3>Laporan Tagihan Kos Kak Sri</h3>  
       </div>
    </header>
    <div class="content">
        <table width="100%" id="tampil">
            <thead>
                <th style="text-align:center">Nomor Tagihan</th>
                <th style="text-align:center">Nama Penghuni</th>
                <th style="text-align:center">Keterangan</th>
                <th style="text-align:center">Jumlah Tagihan</th>
            </thead>
        <tbody>
            <?php $i=1 ?>
            <?php foreach($tagihan as $tg) : ?>
            <tr>
                <td style="text-align:center"><?php echo $tg["no_tagihan"]; ?></td>
                <td style="text-align:center"><?php echo $tg["nama_penghuni"];?></td>
                <td style="text-align:center"><?php echo $tg["keterangan"];?></td>
                <td style="text-align:center"><?php echo $tg["jlh_tagihan"]; ?></td> 
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <script src="js/script.js"></script>
</body>
<script>
    window.print();
</script>
</html>
<?php
include '../connection.php';
session_start();
if(isset($_SESSION["login"])){
    header("location:index.php");
    exit;
}



if (isset($_SESSION['username'])) 
{
  header("Location: ../index.php");
}

if (isset($_POST['submit'])) 
{
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) 
  {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login'] = $row['username'];
    header("Location: ../index.php");
  } 
  else 
  {
    echo "<script>
    alert('Email or password is wrong. Please try again');
    document.location.href='../index.php';
    </script>";
    
  }
}

?>
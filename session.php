<?php
   include('data/dbConnect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['iduser'];
   $login_firstName = $row['firstName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
<?php
require 'dbh.php';
session_start();
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $_SESSION["proname"] = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM medcins WHERE email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  
  if(mysqli_num_rows($result) > 0){
    if($password == $row['motDePasse']){
      $_SESSION["nom"] = $row["nom"];
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["idm"];
      $_SESSION["prenom"] = $row["prénom"];
      $result2 = mysqli_query($con, "SELECT * FROM patients WHERE idm = $_SESSION[id]");
      $_SESSION["docPatients"] = mysqli_num_rows($result2);
      header("Location: ../dashboard.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
      header("Location: ../Randez-vous.php");
    }
  }
  else{
    echo"<script> alert('User Not Registered'); </script>";
    header("Location: ../Randez-vous.php");
  }
}
?>


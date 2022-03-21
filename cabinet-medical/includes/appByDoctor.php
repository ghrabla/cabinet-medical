<?php
  include_once 'dbh.php';
   $nom = $_POST['nom'];
   $prénom = $_POST['prénom'];
   $email = $_POST['email'];
   $telephone = $_POST['telephone'];
   $date = $_POST['date'];
   $maladies = $_POST['maladies'];
   $hidden = $_POST['hidden'];  
   $selection = "SELECT  nom FROM medcins WHERE idm = $hidden";
   $result = mysqli_query($con,$selection);   
   $docteurRow = mysqli_fetch_assoc($result);
   $docteurNom = $docteurRow['nom'];
   $sql = "INSERT INTO  patients (nom , prénom , email , telephone ,dateNaissance,maladie,idm) VALUES ('$nom','$prénom' , '$email','$telephone','$date','$maladies', '$hidden')";
   $sql2 = "INSERT INTO  appointemants (appointemantDate , docteurNom, patientNom , idm ,idp) VALUES ('$date','$docteurNom' , '$nom','$hidden','$hidden')";
   mysqli_query($con,$sql);
   mysqli_query($con,$sql2);
   header("Location: ../dashboard.php?randez-vous=success");
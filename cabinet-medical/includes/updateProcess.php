<?php
include "dbh.php";
mysqli_query($con,"UPDATE patients set nom ='" . $_POST['nom'] ."', prénom='" . $_POST['prénom'] ."' ,email='" . $_POST['email'] . "' ,telephone='" . $_POST['telephone'] . "',dateNaissance='" . $_POST['date'] . "'  WHERE idp ='" . $_POST['hidden'] ."'");
header("Location: ../dashboard.php?randez-vous=success");
?>

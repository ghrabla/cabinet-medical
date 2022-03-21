<?php
include 'dbh.php';
$deleteOp = "DELETE FROM patients WHERE idp ='" . $_GET['idp'] . "'"  ;
mysqli_query($con, $deleteOp );
?>

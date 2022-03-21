<?php
session_start();
include 'includes/dbh.php';
if(isset($_GET['idp'])){
    include 'includes/deleteProcess.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="pictures">
</head>
<body>
 <nav class="dashboard-links">
     <div >
     <img class="logo" src="pictures/Cabinet Pro.svg" alt="" style="width: 130px; height: 35px;">
     </div>
     <div class="links-jawad">
        <div>
            <a href="dashboard.php"><img src="pictures/home.svg" alt=""  style="width: 25px; height: 25px;">
                       <h4>Dashboard</h4></a>
         </div>
         <div >
            <a href=""><img src="pictures/setting.svg" alt="" style="width: 25px; height: 25px;">
             <h4>settings</h4></a>
        </div>
        <div >
            <a href="Randez-vous.php"><img src="pictures/log-out.svg" alt=""  style="width: 25px; height: 25px;">
             <h4>Log out</h4>
        </div>
      </div>
    
      
 </nav>
 <div class="user-notif">
    <a href=""><img src="pictures/notification.svg" alt=""  style="width: 25px; height: 25px;"></a>
    <a href=""><img src="pictures/user.svg" alt=""  style="width: 25px; height: 25px;"></a>
    <h4><?php  echo "$_SESSION[proname]";?></h4>
 </div>
 <div class="header">
 <div class="header-numbers">
    <div class="numbers-elements">
        <img src="pictures/patient.svg" alt="">
        <h3><?php 
          $sql = "SELECT * FROM  patients ";
          $operation = mysqli_query($con,$sql);    
          $allPatients = mysqli_num_rows($operation);
          echo "$allPatients";
        ?></h3>
        <h3>general patient</h3>
    </div>

    <div class="numbers-elements">
        <img src="pictures/people.svg" alt="">
        <h3><?php  echo "$_SESSION[docPatients]";?></h3>
        <h3>votre patient</h3>
    </div>
    
    <div class="numbers-elements">
        <img src="pictures/cloud.svg" alt="">
        <h3>4</h3>
        <h3>compte cloude</h3>
    </div>

    <div class="numbers-elements">
        <img src="pictures/annual.svg" alt="">
        <h3>10</h3>
        <h3>services mois</h3>
    </div>
    <button>
        <span class = "buttonIcon"><i class="fas fa-user-plus"></i></span>   
        <span class = "buttonText">Ajouter patient</span>  
    </button>

    
</div>
<div>
    <table>
<tr>
        <th>nom</th>
        <th>E-mail</th>
        <th>Date naissance</th>
        <th>Phone</th>
        <th>maladie</th>
        <th>options</th>
</tr>
<?php
        
        $sql = "SELECT * FROM  patients where idm = $_SESSION[id]";
        $result = mysqli_query($con,$sql);    
        // $result = $con -> query($sql);
        $resultCheck = mysqli_num_rows($result);//get the number of rows
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                
               ?>
               <tr>
               <td><?php echo $row['nom']  . " " . $row['prénom']  ; ?></td>
               <td><?php echo $row['email'] ; ?></td>
               <td><?php echo $row['dateNaissance'] ; ?></td>
               <td><?php echo $row['telephone'] ; ?></td>
               <td><?php echo $row['maladie'] ; ?></td>
               <td><a href = "?idp=<?php echo $row['idp'];?>" class='fas fa-trash-alt'></a> <a href = "dashboard.php?userid=<?php echo $row['idp'];  ?>" class='fas fa-edit' id ="edit" data_id=<?=$row["idp"]?>></a></td>
              </tr>
                 <!-- echo "<tr><td>" . $row['nom']  .  " " . $row['prénom']  .  "</td><td>" . $row['email'] . "</td><td>"  . $row['dateNaissance'] . "</td><td>". $row['telephone'] . 
                "</td><td>". $row['maladie'] .  "</td><td>" ."<a href = delete-process.php?userid= " . $row['idp'] . "  " . " class='fas fa-edit'></a>"."<a href = dashboard.php?userid= " echo $row['idp'];  "  " . " class='fas fa-trash-alt'></a>" . "</td></tr>"; -->
                
            
            <?php
          }}
          echo "</table>";
       
    ?>
</div>
</div>
             <div class = "model" id="model" >
             <div class = "title">
                  <p id = "formTitle">Completer la formulaire</p>
             </div>
            <form action = "includes/appByDoctor.php" method="POST" class = "model-body">
                <input type="text"  placeholder="le nom du patient" name="nom" >
                <input type="text" placeholder="le prénom du patient" name="prénom" >
                <input type="text" placeholder="l'email du patient" name="email" >
                <input type="number" placeholder="le telephone du patient" name="telephone">
                <input type="Date" placeholder = "la date du naissance" name="date">
                <select name="maladies" id="maladies" aria-placeholder="la maladie du patient">
                    <option value="" disabled selected hidden>Maladie</option>
                    <option value="m1">Maladie 1</option>
                    <option value="m2">Maladie 2</option>
                    <option value="m3">Maladie 3</option>
                    <option value="m4">Maladie 4</option>
                  </select> 
                  <?php 
                    echo "<input type=hidden  name=hidden value= $_SESSION[id] >";
                  ?>
                <button type = "submit" class="suivant1" >Ajouter</button>
                </form>
            </div>
            </div>
            <a id="overlay" href="dashboard.php" class=<?=isset( $_GET['userid'] ) ? "active": ""?> ></a>
            </section>
            
            <?php
                  $isUserIdSet = isset( $_GET['userid'] );
                  if($isUserIdSet){
                  $userId =$_GET['userid'];          
                  $selectPatient= "SELECT * FROM  patients where idp = '" . $userId . "'";
                  $selectionOp = mysqli_query($con,$selectPatient);
                  $patientToEdit = mysqli_fetch_assoc($selectionOp);
                  }
                  
                   ?>
            <div class = "editForm <?=$isUserIdSet ? "active": ""?>" id="editForm" >
             <div class = "title">
                  <p id = "formTitle">Modifier ce patient</p>
             </div>
            <form action = "includes/updateProcess.php" method="POST" class = "editForm-body2">
                <input type="text"  name="nom" value="<?php echo $patientToEdit['nom']; ?>">
                <input type="text" name="prénom" value="<?php echo $patientToEdit['prénom']; ?>">
                <input type="text"  name="email" value="<?php echo $patientToEdit['email']; ?>">
                <input type="number"  name="telephone"value="<?php echo $patientToEdit['telephone']; ?>">
                <input type="Date"  name="date" value="<?php echo $patientToEdit['dateNaissance']; ?>">
                <select name="maladies" id="maladies" aria-placeholder="la maladie du patient" >
                    <option value="" disabled selected hidden>Maladie</option>
                    <option value="m1">Maladie 1</option>
                    <option value="m2">Maladie 2</option>
                    <option value="m3">Maladie 3</option>
                    <option value="m4">Maladie 4</option>
                  </select> 
                  <?php 
                   if(isset($_GET['userid'] )){  
                    echo "<input type=hidden  name=hidden value= '" . $_GET['userid'] . "' >";
                   }
                  ?>
                <button type = "submit" id ="modificationButton" >Modifier</button>
                </form>
             

</div>


<script src="https://kit.fontawesome.com/f694c8cce8.js" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html><!-- <form action="" class="header-numbers-content">
        <div class="add">
            <div class="add-button">
                <img src="pictures/add.svg" alt="">
                <a href="">ajouter patient</a>
            </div>
        </div>
        <br>
        <div class="form-titles">
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
        </div>
        <div class="form-titles">
            <p>name</p> 
            <p>name</p>
            <p>name</p>
            <p>name</p>
            <p>name</p>
        </div>
    
      </form> -->
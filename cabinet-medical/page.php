<?php
 session_start();
 include_once 'includes/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pictures">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="navbar-logo">
            <a href="page.php"><img class="logo" src="pictures/Cabinet Pro.svg" alt="" style="width: 120px; height: 30px;"></a>
            </div>
            <div class="smallMenu">
              <div class="navbar-links">
                <a href="page.php"> Notre cabinet</a>
                <a href="Randez-vous.php"> Randez-vous</a>
                </div>
                <div class="navbar-phone">
                <img src="pictures/phone.svg" alt="" style="width: 20px; height: 20px;">
                <span>
                    <a href="">+212 6 00 00 00 00</a>
                </span>
            </div> 
            <div class="navbar-button">
                <button class="asDoctor">log-in</button>
            </div>   
            </div>
            <span id="invisibleNum">
                <a href="">+212 6 00 00 00 00</a>
            </span>
            <div class = "burger">
                <div></div>
                <div></div>
                <div></div>
             </div>           
            </div>     
    </nav>
    <section class="container">
        <div class="container-title">
             <h1>Trouver <span class="text-color">Les Meilleures <br> Traumatologues</span> Dans <br> Notre Cabinet</h1>
             <p>On accepte toutes les types des traumatismes physique <br>
                nous offrons les meilleurs experts dans le domaine <br>
                avec les meilleurs services</p>
                <div class="container-links">
                    <div class="container-button ">
                        <a href="Randez-vous.php">Randez-vous</a>  
                    </div> 
                    <div class="video-link">
                        <div class="video-icon">
                            <a href=""><img src="pictures/icons8-play-button-circled-90 2.svg" alt=""></a>
                        </div>
                       <div class="container-video">
                        <a href="">Regarder Notre video</a>
                       </div>
                    </div>
                </div>
        </div>
        <div class="container-image">
            <img src="pictures/Doctor-PNG-Free-Download 2.svg" alt="">
        </div>
    </section>

  <section class="all">
    <section class="header">
        <div class="header-text">
         <h2>Certaines de nos statistiques</h2>
         <p>nous mettons certaines de nos statistiques de <br>
              l'année écoulée pour vous donner une autre <br> raison de nous choisir</p>
         <div class="header-statistique">
             <div class="statistique 1">
                 <div>
                     <span >+100</span>
                     <p class = "stat">rendez-vous par jour</p>
                 </div>
                 <div>
                     <span >+90%</span>
                     <p class = "stat">Le taux de satisfaction</p>
                 </div>
              </div>    
              <div class="statistique 2">
                 <div>
                     <span >+150</span>
                     <p class = "stat">Opérations par mois</p>
                 </div>
                 <div>
                     <span >+99%</span>
                     <p class = "stat">Le taux de reussite</p>
                 </div>
              </div>  
         </div>
        </div>
        <div class = "imgCont">
            <img src="pictures/pexels-photo-6129052 (1) 2.svg" alt="">
        </div>
        
     </section>
     <section>
        <div class = "model2" id="model2" >
         <div class = "title">
              <p id = "formTitle2">Log-in</p>
         </div>
         <form action = "includes/login.php" method="POST" class = "model-body2">
            <label for="fname" class = "inputLabel">Full Name</label>
            <input type="text"  placeholder="Full Name" name="start" >
            <label for="fname" class = "inputLabel">Password</label>
            <input type="password" placeholder="password" name="start" >
            <div class = "checkBox">
              <input type="checkbox" name = "check" class="check">
            <label for="check" class= "checkBoxTitle">Keep me signed in</label>  
            </div>
            <button class="asDoctor">Log-in</button>
            <p class = "forgotPassword">Forgot my password</p>
         </form>
        </div>
        </div>
        <div id="overlay" ></div>
    </section>
     <section class="services">
      <div class="services-text">
         <h2>Notre services</h2>
         <p class = "serviceDescription" >pour obtenir plus d'informations, nous vous montrons ces <br>
              services pour améliorer votre santé et celle de votre famille</p>
      </div>
 
      <div class="box-line">
         <div class="box-child">
             <img src="pictures/gel.png" alt="">
             <h2 class = "serviceName">Examen médical</h2>
             <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
         </div>
    
         <div class="box">
            <img src="pictures/saline.png" alt="">
            <h2 class = "serviceName"> surveillance médicale</h2>
            <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
        </div>
    
        <div class="box">
            <img src="pictures/pharmacist.png" alt="">
            <h2 class = "serviceName" >gestion d’urgence</h2>
            <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
        </div>
      </div>
 
      <div class="box-line">
 
         <div class="box">
             <img src="pictures/syrup.png" alt="">
             <h2 class = "serviceName">Les chirurgies</h2>
             <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
         </div>
    
         <div class="box">
            <img src="pictures/tray.png" alt="">
            <h2 class = "serviceName">Examen médical</h2>
            <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
        </div>
    
        <div class="box-child">
            <img src="pictures/pharmacist (1).svg" alt="" style="width: 56px;">
            <h2 class = "serviceName">Routine check-ups</h2>
            <p class = "serviceDescription">for make your health and family <br> health better you have to see our <br> services and offre</p>
        </div>
      </div>
     </section>

     <section class="contact">
       <div>
        <img src="pictures/contactimg.svg" alt="">
       </div>

       <div> 
          <h2 class = "contactTitle">contact us</h2>
          <div class="input-div">
            <input type="text" placeholder="votre nom">
            <input type="text" placeholder="phone">
          </div>
          <br>
         <div class="input-div">
            <input type="text" placeholder="email">
            <input type="text" placeholder="subjuct">
         </div>
         <br>
         <textarea name="" id="" cols="30" rows="10" placeholder="ecrire message"></textarea>
         <br>
         <br>
         <a href="" class="contact-button">envoyer message</a>
       </div>

     </section>
  </section>
  <footer>
   
    <div class="footer">
        <div class = "footer-logo">
            <img src="pictures/Cabinet Pro.svg" alt="" style="width: 130px; height: 35px;" >
        </div>
      
        <div class="footer-links">
            <div class ="services">
                <h2>Services</h2>
                <p>Examen médical</p>
                <p>Clinique d'urgence</p>
                <p>Routine check-ups</p>
                <p>chirurgies</p>
               </div>
               <div class ="services">
                <h2>Support</h2>
                <p >Trouver un docteur</p>
                <p>Prend un rendez-vous</p>
                <p>FAQ</p>
                <p>Terms of use</p>
               </div>
        </div>
    
       <div class="social-network">
           <span>+212 6 00 00 00 00</span>
           <h2>cabinetPro@gmail.com</h2>
           <div class="social-network-a">
            <a href=""><img src="pictures/facebook.svg" alt=""></a>
            <a href=""><img src="pictures/insta.svg" alt=""></a>
            <a href=""><img src="pictures/twitter.svg" alt=""></a>
           </div>
       </div>
    </div>
<br>
   <p class="footer-p">Copyright © 2022 CabinetPro Ltd. Tous les droits reservées.</p>
  </footer>
  
   
    <!-- <div class="footer">
        <div>
            <img src="pictures/Cabinet Pro.svg" alt="">
        </div>
      <footer>
        <div class="footer-links">
            <div>
                <h2>Services</h2>
                <p>Examen médical</p>
                <p>Clinique d'urgence</p>
                <p>Routine check-ups</p>
                <p>chirurgies</p>
               </div>
               <div>
                <h2>Support</h2>
                <p>Trouver un docteur</p>
                <p>Prend un rendez-vous</p>
                <p>FAQ</p>
                <p>Terms of use</p>
               </div>
        </div>
    
       <div class="social-network">
           <span>+212 6 00 00 00 00</span>
           <h2>cabinetPro@gmail.com</h2>
           <div class="social-network-a">
            <a href=""><img src="pictures/facebook.svg" alt=""></a>
            <a href=""><img src="pictures/insta.svg" alt=""></a>
            <a href=""><img src="pictures/twitter.svg" alt=""></a>
           </div>
       </div>
    </div>
<br>
   <p class="footer-p">Copyright © 2022 CabinetPro Ltd. Tous les droits reservées.</p>
  </footer> -->

    <script src="script.js"></script>
</body>
</html>
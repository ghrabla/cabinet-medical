<?php
session_start();
include 'includes/dbh.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Randez-vous.css">
    <title>Randez-vous</title>
</head>
<body>
    <main>
        <nav>
            <div class="navbar">
                <div class="navbar-logo">
                    <a href="page.php"><img class="logo" src="pictures/Cabinet Pro.svg" alt="" style="width: 130px; height: 35px;"></a>
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
                    <button class="asDoctor">Log-in</button>
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
        <section>
           <div class="doctors">
            <div class = "doctor" >
                <img src="pictures/dr.Aya Soultani.png" alt="Dr.Aya Soultani" width="200" height="250" style="vertical-align:bottom">
                <p id = "name">Dr.Aya Soultani</p>
                <p id = "spécialité">traumatologue</p>
                <button id="1">Randez-vous</button>
            </div>
            <div class = "doctor" >
                <img src="pictures/Dr.Rahbani Rafik.png" alt="Dr.Rahbani Rafki" width="200" height="250" style="vertical-align:bottom">
                <p id = "name">Dr.Rahbani Rafki</p>
                <p id = "spécialité">traumatologue</p>
                <button id="2">Randez-vous</button>
            </div>
            <div class = "doctor" >
                <img src="pictures/Dr.Khawla Alami.png" alt="Dr.Khawla Alami" width="200" height="250" style="vertical-align:bottom">
                <p id = "name">Dr.Khawla Alami</p>
                <p id = "spécialité">traumatologue</p>
                <button id="3">Randez-vous</button>
            </div>
            <div class = "doctor" >
                <img src="pictures/Dr.Rahbani Rafik.png" alt="Dr.Khalid Rafki" width="200" height="250" style="vertical-align:bottom">
                <p id = "name">Dr.Khalid Rafki</p>
                <p id = "spécialité">traumatologue</p>
                <button id="4">Randez-vous</button>
            </div>
           </div>            
        </section>
        <section>
            <div class = "model" id="model" >
             <div class = "title">
                  <p id = "formTitle">Completer la formulaire</p>
             </div>
                <form action = "includes/signup.php" method="POST" class = "model-body">    
                <input type="text"  placeholder="votre Nom" name="nom" >
                <input type="text" placeholder="votre Prénom" name="prénom" >
                <input type="text" placeholder="votre E-mail" name="email" >
                <input type="number" placeholder="votre Num.Tél" name="telephone">
                <input type="Date"  name="date">
                <select name="maladies" id="maladies" aria-placeholder="Maladies">
                    <option value="" disabled selected hidden>votre Maladie</option>
                    <option value="m1">Maladie 1</option>
                    <option value="m2">Maladie 2</option>
                    <option value="m3">Maladie 3</option>
                    <option value="m4">Maladie 4</option>
                  </select> 
                  <input type="hidden"  name="hidden" value="erz" class = "input">
                <button type = "submit" class="suivant1" >Randez-vous</button>
                </form>
            </div>
            </div>
            <div id="overlay" ></div>
            </section>
            <section>
                <div class = "model2" id="model2" >
                 <div class = "title">
                      <p id = "formTitle2">Log-in</p>
                 </div>
                <form action="includes/login.php" method="post" autocomplete="off" class = "model-body2">
                    <label for="fname" name = "usernameemail" class = "inputLabel">Full Name</label>
                    <input type="text"  placeholder="Full Name" name="usernameemail" >
                    <label for="fname" class = "inputLabel">Password</label>
                    <input type="password" placeholder="password" name="password" >
                    <div class = "checkBox">
                      <input type="checkbox" name = "check" class="check">
                    <label for="check" class= "checkBoxTitle">Keep me signed in</label>  
                    </div>
                    <button type="submit" name="submit">Login</button>
                    <p class = "forgotPassword">Forgot my password</p>

                </form>
                </div>
                <div id="overlay" ></div>
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
         
    </main>
</body>
<script src = "Randez-vous.js"></script>
</html>
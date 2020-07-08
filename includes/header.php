<link rel="stylesheet" href="../style/bootstrap.css">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="icon" href="../images/icon/home.ico">
<title><?php echo $titre_page?></title>
<header>
  <?php
  session_start();
  
  ?>
    <!--Header du site -->
       <div class="container borderhr">
       <nav>
       <!--la barre de navigation -->
        <div class="navbar navbar-default">
       <!--logo du site -->
         <div class=" navbar-header navbar-brand ">
             <a href="../index.php" ><img class="logo" src="../images/logo.png" alt="le logo"></a>
         </div>
         <!--les menu de navigation a droite  -->
         <div class="navbar-right"> 
             <ul>
                  <li><a href="../pages/location.php">Locations</a></li>                  
                  <li><a href="../pages/immobilier.php">Achat</a></li>
                  <li><a href="../pages/deposer_annonce.php#depose">Déposer une annonce</a></li> 
                 <li><a href="../pages/contact.php">Contact</a></li>
                 <li id="separateur"> </li> <!--un separateur -->
                 <?php
                 if(isset($_SESSION["username"])){
                     ?>
                       
                          
                        <li class="dropdown "> 
                            
                             <a class="dropdown-toggle" id="dropdownMenuButton" href="../pages/profile.php#profile" title="Mon profil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i>  <?php echo $_SESSION["nom"]."  ".$_SESSION["prenom"];?></a> 
                           
                            <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="../pages/profile.php#profile"> Mon Profile</a>
                           <a class="dropdown-item" href="../pages/profile.php#favoris">Mes Favoris</a>
                            <a class="dropdown-item" href="../pages/servicedem.php#rdvdem">Mon déménagement</a>
                            </div>
                          </li>   
                        
                        
                        <li>
                        <a href="?action=deco" title="Déconnexion"><i class="fas fa-sign-out-alt"></i></a>

                        </li>

                        
                   <?php
                   if(isset($_GET["action"])){
                    if($_GET["action"]="deco"){
                      $_SESSION["username"]=null;
                      $_SESSION["id"]=null;
                      ?>
                          <meta http-equiv="refresh" content="../index.php">
                          <?php
                    }
                }
                 }
                 else{
                  
                     ?>
                   <li><a href="../pages/connexion.php#fullconnex">Se Connecter</a></li>
                 <li><a href="../pages/inscription.php#inscript">S'inscrire</a></li>
                 <?php
                 }
                 ?>
                 
             </ul>
         </div>
        </div>
       </nav>
   </div>
   </header>
<link rel="stylesheet" href="../style/bootstrap.css">
<link rel="stylesheet" href="../style/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link rel="icon" href="../images/icon/favicon.ico">
<header>
  <?php
  session_start();
  
  ?>
    <!--Header du site -->
       <div class="container">
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
                 <li active><a href="../index.php" >Acceuil</a></li>
                 <li><a href="../pages/immobilier.php">Immobilier</a></li>
                 <li><a href="../pages/deposer_annonce.php">Vendre</a></li>
                 <li><a href="../pages/contact.php">Contact</a></li>
                 <li id="separateur"> </li> <!--un separateur -->
                 <?php
                 if(isset($_SESSION["username"])){
                     ?>
                   <li><a href=""><?php echo $_SESSION["nom"]."  ".$_SESSION["prenom"];?></a></li>
                   <?php
                 }
                 else{
                  
                     ?>
                   <li><a href="../pages/connexion.php">Se Connecter</a></li>
                 <li><a href="../pages/inscription.php">S'inscrire</a></li>
                 <?php
                 }
                 ?>
                 
             </ul>
         </div>
        </div>
       </nav>
   </div>
   </header>
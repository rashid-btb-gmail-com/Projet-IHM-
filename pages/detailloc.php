
<!DOCTYPE html>
<html lang="fr">
<head>
    <!--les metas necessaire-->
    <meta charset="UTF-8">
    <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya 
    de tizi ouzou ">
    <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--le titre-->
    <title>Vilavie- detail bien  </title>
    <!--icon du site-->
    <link rel="icon" href="../images/icon/favicon.ico">
    <!--feuilles de style-->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
<?php
include_once('../includes/header.php');
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$detail_bien = $db->query('SELECT * FROM biens_location Where id="'.$_GET['id'].'"');
$choisie = $detail_bien->fetch();
?>
<div class="container-fluid d-flex justify-content-between fulldetail ">
<div class="suggestdetail d-flexbox flex-row" id="dairasugg">
<h3> Suggestions des biens </h3>
<h5> Sure La Wilaya de "<?php echo($choisie['wilaya']) ?>"</h5>
<!-- suggestion par regions-->
<div class="lesbienssugg">
<?php $bienrep = $db->query('SELECT id,titre, lien_img FROM biens_location Where wilaya="'.$choisie['wilaya'].'" LIMIT 0,3');
       while ($donne= $bienrep->fetch()){
         echo('<div class="d-flex suggcontainer" >
           <img src="../'.$donne['lien_img'].'" class="imgsuggestdetail" alt="l\'image du bien" >
           <div class="infosugg">
           <p>'.$donne['titre'].'</p>
            <a href="../pages/detailloc.php?id='.$donne['id'].'">Voir Detail</a> 

            </div>
         </div>');}
         $bienrep->closeCursor();
?>
</div>
</div>
<!-- detail bien -->
<div class="boxbien">
<div class="d-flex justify-content-center titrebien">
<h1> <?php echo($choisie['titre']) ?> </h1>
</div>
<div class="infobox d-flex">
<?php echo('<img class="imgdetail"src="../'. $choisie['lien_img'].'" alt="image du bien">') ?>
<div class="pointdetail">
<h3><u>Informations:</u></h3>
<?php
  /*$se=$db->query("SELECT id  FROM clients");
while($donnees=$se->fetch()){
  $id_cl=$donnees['id'];

}*/


 echo('
<p><b> Type: </b>'.$choisie['type_bien'].'</p>
<p><b> Lieux : </b>'.$choisie['adresse'].', '.$choisie['commune'].', '.$choisie['daira'].', '.$choisie['wilaya'].'</p> 
<p><b> Surface: </b>'.$choisie['surface'].'</p>
<p><b> Pieces: </b>'.$choisie['pieces'].'</p>
<p><b> Etages: </b>'.$choisie['etage'].'</p>
<p><b> Description:</b> <br/>'.$choisie['description'].' </p>
<h5> Prix = '.$choisie['prix'].' DA / Mois </h5> 
<div class="text-center liendemanderdv">
<a href="./demande_rdv.php?t=biens_location&id='.$choisie['id'].'" class="rdvdmdbien">Demander Un Rendez-Vous de Visite</a>
</div>
<a href="favorisloc.php?id_cl='.$_SESSION["id"].'&t=1&id= '.$choisie['id'].'"> fav </a>
'); 

if($_SESSION["username"]!=NULL){

}
$_SESSION["url_prec"]="./demande_rdv.php?t=biens_location&id=".$choisie['id'];
$detail_bien->closeCursor();
 ?>
 </div>
</div>
</div>
<!-- suggestion par prix-->
<div class="suggestdetail d-flexbox flex-row " id="prixsugg">
<h3> Suggestions des biens </h3>
<h5> Avec un Prix moins de <?php echo($choisie['prix']) ?>DA</h5>
<div class="lesbienssugg" >
<?php $bienprix = $db->query('SELECT id,titre, lien_img FROM biens_location Where prix <'.$choisie['prix'].' LIMIT 0,4');
       while ($aproxis= $bienprix->fetch()){
         echo('<div class="d-flex suggcontainer" >
           <img src="../'.$aproxis['lien_img'].'" class="imgsuggestdetail" alt="l\'image du bien" >
           <div class="infosugg">
           <p>'.$aproxis['titre'].'</p>
            <a href="../pages/detailloc.php?id='.$aproxis['id'].'">Voir Detail</a> 
            </div>
         </div>');}
         $bienprix->closeCursor();
?>
</div>
</div>
</div>
<?php
include_once("../includes/footer.php");
?>
</body>
</html>
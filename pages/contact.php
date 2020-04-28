<!DOCTYPE html>
<html >
 <head>
     <!--les metas necessaire-->
     <meta charset="UTF-8">
     <meta name="description" content="Un site de vente d'apartement, villa et studio pour la wilaya de tizi ouzou ">
     <meta name="keywords" content="tizi-ouzou,vente,appartement,maison,villa,algerie">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--le titre-->
     <title>Vilavie - Acceuil</title>
     <!--icon du site-->
     <link rel="icon" href="./images/icon/favicon.ico">
     <!--feuilles de style-->
     <link rel="stylesheet" href="./style/bootstrap.css">
     <link rel="stylesheet" href="./style/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
     <!--kidot de fodil-->
     <script src="https://kit.fontawesome.com/b811c1c09f.js" crossorigin="anonymous"></script>
     
 </head>
 <body class="corps">
<?php include_once("../includes/header.php");
?>
<div class="corps">
	<br>
	<div class="writeus">
Une remarque ?, un renseignement?,plus d'information ?.Ecrivez-nous!:
	</div>
<div class="conatainer_general">
<img src="../images/logo.png" style="  margin-left: 7cm;">
<form method="post" action="traitement.php">
<label class="form_contact">Votre nom(obligatoire)</label>
<input class="form_contact" type="text">
<label class="form_contact">Votre prenom(bligatoire)</label>
<input class="form_contact" type="text">
<label class="form_contact">Email(obligatoire)</label>
<input class="form_contact" type="text">
<label class="form_contact">Sujet</label>
<input class="form_contact" type="text">
<label class="form_contact2" id="msg">Votre message:</label>
<textarea class="form_contact2"id="msg" name="message"  size="100" style="width:13cm;height:5.5cm" ></textarea>
</form>
</div>
<div class="map_adr">
<iframe class="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3198.538685657088!2d4.0403188174318965!3d36.709621884673716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128dc876da728cc3%3A0x41f7373e93892146!2sBoulevard%20Khaled%20Khodja%2C%20Tizi%20Ouzou!5e0!3m2!1sfr!2sdz!4v1588045443248!5m2!1sfr!2sdz" width="700" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
<p class="info">TEL:0 26 21 20 20 </p>
	<p class="info">FAX:026 20 21 21</P>
	<p class="info">ADRESSE: RUE KHOUDJA KHALED ..FDS.F.DSF........</p>
</div>
</div>
</body>
</html>
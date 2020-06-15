<?php 

$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if (isset($_GET['t'],$_GET['id']) and !empty($_GET['t']) and !empty($_GET['id'])) {
	$getid= (int) $_GET['id'];
	$gett= (int) $_GET['t'];
	


	

	 $req = $db->prepare('SELECT id FROM biens where id=?');
	 $req->execute(array($getid));

	 if ($req->rowCount()== 1) {
	 	if($gett==1){
	 		$fav=$db->prepare('SELECT id FROM favoris where id_biens=? ');
	 		$fav->execute(array($getid)); 

	 		if ($fav->rowCount()==1){
	 			$del=$db->prepare('DELETE FROM favoris where id_biens=? ');
	 			$del->execute(array($getid)); 

	 		}else{

	 		$ins=$db->prepare('INSERT INTO favoris(id_biens) VALUES (?)');
	 		$ins->execute(array($getid));

	 		
	 	}
	 }
	header('Location: http://localhost/Projet-IHM-/Projet-IHM-/pages/detail.php?id='.$getid);
  	exit();
	 	} else echo "erreur";

}
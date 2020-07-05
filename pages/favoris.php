<?php 

$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if (isset($_GET['t'],$_GET['id'],$_GET['id_cl']) and !empty($_GET['t']) and !empty($_GET['id']) and !empty($_GET['id_cl'])) {
	$getid= (int) $_GET['id'];
	$gett= (int) $_GET['t'];
	$id_cl=(int) $_GET['id_cl'];


	

	 $req = $db->prepare('SELECT id FROM biens where id=?');
	 $req->execute(array($getid));

	 $ls=$db->prepare('SELECT id FROM clients where id=?');
	 $ls->execute(array($id_cl));


	 if ($req->rowCount()== 1) {
	 	if($gett==1){
	 		$fav=$db->prepare('SELECT id FROM favoris where id_biens=? and id_cl=?');
	 		$fav->execute(array($getid,$id_cl)); 

	 		if ($fav->rowCount()==1){
	 			$del=$db->prepare('DELETE FROM favoris where id_biens=? and id_cl=? ');
	 			$del->execute(array($getid,$id_cl)); 

	 		}else{

	 		$ins=$db->prepare('INSERT INTO favoris(id_biens,id_cl) VALUES (?,?)');
	 		$ins->execute(array($getid,$id_cl));

	 		
	 	}
	 }
	header('Location: http://localhost/Projet-IHM-/pages/detail.php?id='.$getid);
  	exit();
	 	} else echo "erreur";

}
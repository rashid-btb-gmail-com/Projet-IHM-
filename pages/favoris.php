<?php
$db=new PDO('mysql:host=localhost;dbname=vilavie','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
session_start();
            if(isset($_GET["id"])){
                
                

                // inserer dans favoris 
                $insert=$db->prepare('INSERT INTO favoris VALUES(NULL,?,?)');
                $insert->execute(array($_SESSION["id"],$_GET["id"]));
            }

?>
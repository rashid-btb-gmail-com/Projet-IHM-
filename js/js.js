function verifier_champs(){
    var i;//indice i pour la boucle for
    // verifier les deux mot de passe pour confirmer
    var mdp=document.getElementById("mdp").value;
    var mdp2=document.getElementById("mdp2").value;
    if(mdp!=mdp2){
        document.getElementById("msg").innerHTML= "<p style='color:red'>Veuillez saisir à nouveau le mot de passe .</p>"; 
    }
    else document.getElementById("msg").innerHTML="<p style='color:green'> </p>";

    //controler si les champs ne sont pas vide 
    for(var i=0;i<=8;i++){
        if(document.getElementsByTagName("input")[i].value==""){  
 
        document.getElementsByClassName("controle")[i].innerHTML='<i class="fas fa-times" style="font-size:23px"></i>';
        
            
        }
        else
        document.getElementsByClassName("controle")[i].innerHTML='<i class="fas fa-check" style="color:green;font-size:23px"></i>';

    }

    //contrôle nom et prenom 
    var nom=document.getElementsByName("nom")[0].value;
    var prenom=document.getElementsByName("prenom")[0].value;

    for(i=0;i<nom.length;i++){
        if(!(((nom[i]>='A')&&(nom[i]<='Z'))||((nom[i]>='a')&&(nom[i]<='z')))){
            document.getElementById("etat_nom").innerHTML='<i class="fas fa-times" style="color:red;font-size:23px;"></i><span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px">Veuillez saisir que des lettres</span>';
            return false;
            
            
        }
    }
}


    
    
    

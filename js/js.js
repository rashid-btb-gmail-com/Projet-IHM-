function verifier_champs(){
    const vert='<i class="fas fa-check" style="color:green;font-size:23px;"></i>';
    const rouge='<i class="fas fa-times" style="color:red;font-size:23px;"></i>';
    var i;//indice i pour la boucle for
    

    //contrôle des inputs
    
    
    var controle;
    //nom
    var nom=document.getElementsByName("nom")[0].value;
    if(nom[0]==null){
        document.getElementById("etat_nom").innerHTML=rouge;
    }
    for(i=0;i<nom.length;i++){
        if(!(((nom[i]>='A')&&(nom[i]<='Z'))||((nom[i]>='a')&&(nom[i]<='z')))){
            document.getElementById("etat_nom").innerHTML=rouge;
            document.getElementsByName("nom")[0].style.borderRight=""
            document.getElementById("msg_nom").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;right:35px">Veuillez saisir que des lettres</span>';
        }
        else{
            document.getElementById("etat_nom").innerHTML=vert;
            document.getElementsByName("nom")[0].style.borderRight="5px green solid";
            document.getElementById("msg_nom").innerHTML="";
        }
    }

    //prenom
    var prenom=document.getElementsByName("prenom")[0].value;
    if(prenom[0]==null){
        document.getElementById("etat_prenom").innerHTML=rouge;
    }
    for(i=0;i<prenom.length;i++){
        
        if(!(((prenom[i]>='A')&&(prenom[i]<='Z'))||((prenom[i]>='a')&&(prenom[i]<='z')))){
            document.getElementById("etat_prenom").innerHTML=rouge;
            document.getElementsByName("prenom")[0].style.borderRight=""
            document.getElementById("msg_prenom").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;right:35px">Veuillez saisir que des lettres</span>';  
        }
        else{
            document.getElementById("etat_prenom").innerHTML=vert;
            document.getElementsByName("prenom")[0].style.borderRight="5px green solid";
            document.getElementById("msg_prenom").innerHTML="";
        }
    }

    //username
    var username=document.getElementsByName("username")[0].value;
    if(username[0]==null){
        document.getElementById("etat_username").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_username").innerHTML=vert;
        document.getElementsByName("username")[0].style.borderRight="5px green solid";
    }

    //email
    var email=document.getElementsByName("email")[0].value;
    if(email[0]==null){
        document.getElementById("etat_email").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_email").innerHTML=vert;
        document.getElementsByName("email")[0].style.borderRight="5px green solid";
    }
    

    //mdp
    var mdp=document.getElementsByName("password")[0].value;
    
    if(mdp[0]==null){
        document.getElementById("etat_mdp").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_mdp").innerHTML=vert;
        document.getElementsByName("password")[0].style.borderRight="5px green solid";
    }


    //mdp2
    var mdp2=document.getElementsByName("confirm_password")[0].value;
    
    if(mdp2[0]==null){
        document.getElementById("etat_mdp2").innerHTML=rouge;
    }
    else{
        
        if(mdp2[0]!=mdp[0]){
            document.getElementById("etat_mdp2").innerHTML=rouge;
            document.getElementsByName("confirm_password")[0].style.borderRight=""
            document.getElementById("msg_mdp2").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;right:35px">Veuillez confirmer le mot de passe</span>';
        }
        else{
            document.getElementById("etat_mdp2").innerHTML=vert;
            document.getElementsByName("confirm_password")[0].style.borderRight="5px green solid";
            document.getElementById("msg_mdp2").innerHTML="";
        }
    }
    
    //tel
    var tel=document.getElementsByName("tel")[0].value;
    if(tel[0]==null){
        document.getElementById("etat_tel").innerHTML=rouge;
    }
    for(i=0;i<tel.length;i++){
        
        if(!((tel[i]>='0')&&(tel[i]<='9'))||(tel.length!=10)){
            document.getElementById("etat_tel").innerHTML=rouge;
            document.getElementById("msg_tel").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;right:35px">Numéro de téléphone invalide</span>';
        }
        else{
            document.getElementById("etat_tel").innerHTML=vert;
            document.getElementsByName("tel")[0].style.borderRight="5px green solid";
            document.getElementById("msg_tel").innerHTML="";
        }
    }
    
    //sit fam
    var sit_fam=document.getElementsByName("sit_fam")[0].value;
    
    if(sit_fam[0]==null){
        document.getElementById("etat_sit_fam").innerHTML=rouge;
    }
    else{
        if(!((sit_fam=="Marié")||(sit_fam=="Celibataire"))){
            document.getElementsByName("sit_fam")[0].style.borderRight="";
            document.getElementById("msg_sit_fam").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;right:35px">Veuillez choisir parmi les deux choix</span>';
            document.getElementById("etat_sit_fam").innerHTML=rouge;
        }
        else{
        document.getElementById("etat_sit_fam").innerHTML=vert;
        document.getElementsByName("sit_fam")[0].style.borderRight="5px green solid";
        document.getElementById("msg_sit_fam").innerHTML="";
        }
    }
    
}

$(function(){
    
    
     
 
});
    
    

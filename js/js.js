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
            document.getElementById("etat_nom").innerHTML=rouge+'<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px">Veuillez saisir que des lettres</span>';
            controle=false;  
        }
        else{
            document.getElementById("etat_nom").innerHTML=vert;
        }
    }

    //prenom
    var prenom=document.getElementsByName("prenom")[0].value;
    if(prenom[0]==null){
        document.getElementById("etat_prenom").innerHTML=rouge;
    }
    for(i=0;i<prenom.length;i++){
        
        if(!(((prenom[i]>='A')&&(prenom[i]<='Z'))||((prenom[i]>='a')&&(prenom[i]<='z')))){
            document.getElementById("etat_prenom").innerHTML=rouge+'<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px">Veuillez saisir que des lettres</span>';
            controle=false;  
        }
        else{
            document.getElementById("etat_prenom").innerHTML=vert;
        }
    }

    //username
    var username=document.getElementsByName("username")[0].value;
    if(username[0]==null){
        document.getElementById("etat_username").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_username").innerHTML=vert;
    }

    //email
    var email=document.getElementsByName("email")[0].value;
    if(email[0]==null){
        document.getElementById("etat_email").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_email").innerHTML=vert;
    }
    

    //mdp
    var mdp=document.getElementsByName("password")[0].value;
    
    if(mdp[0]==null){
        document.getElementById("etat_mdp").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_mdp").innerHTML=vert;
    }


    //mdp2
    var mdp2=document.getElementsByName("confirm_password")[0].value;
    
    if(mdp2[0]==null){
        document.getElementById("etat_mdp2").innerHTML=rouge;
    }
    else{
        document.getElementById("etat_mdp2").innerHTML=vert;
    }
    
    //tel
    var tel=document.getElementsByName("tel")[0].value;
    if(tel[0]==null){
        document.getElementById("etat_tel").innerHTML=rouge;
    }
    for(i=0;i<tel.length;i++){
        
        if(!((tel[i]>='0')&&(tel[i]<='9'))||(tel.length!=10)){
            document.getElementById("etat_tel").innerHTML=rouge+'<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px">Numéro de téléphone invalide</span>';
            controle=false;  
        }
        else{
            document.getElementById("etat_tel").innerHTML=vert;
        }
    }
    
    //sit fam
    var sit_fam=document.getElementsByName("sit_fam")[0].value;
    
    if(sit_fam[0]==null){
        document.getElementById("etat_sit_fam").innerHTML=rouge;
    }
    else{
        if(!((sit_fam=="Marié")||(sit_fam=="Celibataire"))){
            document.getElementById("etat_sit_fam").innerHTML=rouge+'<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px">Veuillez choisir parmi les deux choix</span>';
        }
        else{
        document.getElementById("etat_sit_fam").innerHTML=vert;
        }
    }
    
}

$(function($){
    
      
 
})(jQuery);
    
    

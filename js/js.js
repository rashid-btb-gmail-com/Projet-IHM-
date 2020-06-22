function verifier_champs(){
    const vert='<i class="fas fa-check" style="color:green;font-size:23px;position:relative;left:10px;top:7px"></i>';
    const rouge='<i class="fas fa-times" style="color:red;font-size:23px;position:relative;left:10px;top:7px"></i>';
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
            document.getElementById("msg_nom").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;">Veuillez saisir que des lettres</span>';
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
            document.getElementById("msg_prenom").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;">Veuillez saisir que des lettres</span>';  
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
            document.getElementById("msg_mdp2").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;">Veuillez confirmer le mot de passe</span>';
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
            document.getElementById("msg_tel").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;">Numéro de téléphone invalide</span>';
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
            document.getElementById("msg_sit_fam").innerHTML='<span style="color:red;font-size:25px;font-size:15px;position:relative;bottom:10px;">Veuillez choisir parmi les deux choix</span>';
            document.getElementById("etat_sit_fam").innerHTML=rouge;
        }
        else{
        document.getElementById("etat_sit_fam").innerHTML=vert;
        document.getElementsByName("sit_fam")[0].style.borderRight="5px green solid";
        document.getElementById("msg_sit_fam").innerHTML="";
        }
    }
    
}

function filtre_commune(){
    var daira = [   d1=["Abi Youcef","Ain El Hammam","Aït Yahia","Akbil"],
                    d2=["Azazga","Freha","Ifigha","Yakouren ","Zekri"],
                    d3=["Aghribs","Aït Chafâa ","Akerrou","Azeffoun"],
                    d4=["Aït Mahmoud","Beni Aissi","Beni Douala","Beni Zmenzer"],
                    d5=["Beni Yenni","Iboudraren","Yatafen"],
                    d6=["Assi Youcef","Boghni","Bounouh","Mechtras"],
                    d7=["Beni Ziki","Bouzguen","Idjeur","Illoula Oumalou"],
                    d8=["Draâ Ben Khedda","Sidi Namane","Tadmaït","Tirmitine"],
                    d9=["Aïn Zaouia","Aït Yahia Moussa","Draâ El Mizan","Frikat"],
                    d10=["Iferhounène","Illilten","Imsouhel"],
                    d11=["Aït Aggouacha","Irdjen","Larbaâ Nath Irathen"],
                    d12=["Mâatkas","Souk El Thenine"],
                    d13=["Boudjima","Makouda"],
                    d14=["Aït Khellili","Mekla","Souamaâ"],
                    d15=["Aït Boumahdi","Aït Toudert","Ouacif"],
                    d16=["Agouni Gueghrane","Aït Bouaddou","Tizi N'Tleta","Ouadhia"],
                    d17=["Aït Aissa Mimoun","Ouaguenoun","Timizart"],
                    d18=["Iflissen","Mizrana","Tigzirt"],    
                    d19=["M'Kira","Tizi Gheniff"],
                    d20=["Tizi Ouzou","Boukhalfa"],
                    d21=["Aït Oumalou","Tizi Rached"],
                            
                            ];
              
    var daira_select=document.getElementsByName("daira")[0].value;   //recuperer la daira
    var num_daira=parseInt(daira_select[0]+daira_select[1],10)-1;                   //recuperer le num de la daira                     
    
    
    
        
        var commune_daira = document.getElementsByClassName('commune_daira')[0];
        var currentDiv = document.getElementById('commune');  
            
            currentDiv.innerHTML="";

    for(var i=0;i<daira[num_daira].length;i++){
        
        
            currentDiv.insertAdjacentHTML('afterbegin','<option class="commune_daira">'+daira[num_daira][i]+'</option>');
    }
}
function filtre_commune_louer(){
    var daira = [   d1=["Abi Youcef","Ain El Hammam","Aït Yahia","Akbil"],
                    d2=["Azazga","Freha","Ifigha","Yakouren ","Zekri"],
                    d3=["Aghribs","Aït Chafâa ","Akerrou","Azeffoun"],
                    d4=["Aït Mahmoud","Beni Aissi","Beni Douala","Beni Zmenzer"],
                    d5=["Beni Yenni","Iboudraren","Yatafen"],
                    d6=["Assi Youcef","Boghni","Bounouh","Mechtras"],
                    d7=["Beni Ziki","Bouzguen","Idjeur","Illoula Oumalou"],
                    d8=["Draâ Ben Khedda","Sidi Namane","Tadmaït","Tirmitine"],
                    d9=["Aïn Zaouia","Aït Yahia Moussa","Draâ El Mizan","Frikat"],
                    d10=["Iferhounène","Illilten","Imsouhel"],
                    d11=["Aït Aggouacha","Irdjen","Larbaâ Nath Irathen"],
                    d12=["Mâatkas","Souk El Thenine"],
                    d13=["Boudjima","Makouda"],
                    d14=["Aït Khellili","Mekla","Souamaâ"],
                    d15=["Aït Boumahdi","Aït Toudert","Ouacif"],
                    d16=["Agouni Gueghrane","Aït Bouaddou","Tizi N'Tleta","Ouadhia"],
                    d17=["Aït Aissa Mimoun","Ouaguenoun","Timizart"],
                    d18=["Iflissen","Mizrana","Tigzirt"],    
                    d19=["M'Kira","Tizi Gheniff"],
                    d20=["Tizi Ouzou","Boukhalfa"],
                    d21=["Aït Oumalou","Tizi Rached"],
                            
                            ];
              
    var daira_select=document.getElementsByName("daira_loc")[0].value;   //recuperer la daira
    var num_daira=parseInt(daira_select[0]+daira_select[1],10)-1;                   //recuperer le num de la daira                     
    
    
    
        
        
        var currentDiv = document.getElementsByName('commune_loc')[0];  
            
            currentDiv.innerHTML="";

    for(var i=0;i<daira[num_daira].length;i++){
        
        
            currentDiv.insertAdjacentHTML('afterbegin','<option class="commune_daira">'+daira[num_daira][i]+'</option>');
    }
}

function style_onglet_admin() {
    var url=window.location.href;
    
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=ajouter_bien"){
        document.getElementById("onglet1").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet1").style.color="#fa6014";
        document.getElementById("onglet1").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=gerer_biens"){
        document.getElementById("onglet2").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet2").style.color="#fa6014";
        document.getElementById("onglet2").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=confirmer_annonces"){
        document.getElementById("onglet3").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet3").style.color="#fa6014";
        document.getElementById("onglet3").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=ajouter_rdv"){
        document.getElementById("onglet4").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet4").style.color="#fa6014";
        document.getElementById("onglet4").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=gerer_rdv"){
        document.getElementById("onglet5").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet5").style.color="#fa6014";
        document.getElementById("onglet5").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=confirmer_rdv"){
        document.getElementById("onglet6").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet6").style.color="#fa6014";
        document.getElementById("onglet6").style.backgroundColor="#313131";
    }
    if(url=="http://127.0.0.1/Projet-IHM-/admin/plateforme_admin.php?action=clients"){
        document.getElementById("onglet7").style.borderLeft="17px #fa6014 solid";
        document.getElementById("onglet7").style.color="#fa6014";
        document.getElementById("onglet7").style.backgroundColor="#313131";
    }
}

function afficher_formulaire(){
    if(document.getElementById("vendre").checked){
        document.getElementById("form_louer").style="display:none";
        document.getElementById("form_vendre").style="display:block";
        
    }
    if(document.getElementById("louer").checked){
        document.getElementById("form_vendre").style="display:none"
        document.getElementById("form_louer").style="display:block";
        
    }
    
}


function verifier_mdp(){
    var mdp=document.getElementById("mdp").value;
    var mdp2=document.getElementById("mdp2").value;

    if(mdp!=mdp2){
        document.getElementById("msg").innerHTML= "<p style='color:red'>Veuillez saisir à nouveau le mot de passe .</p>"; 
    }
    else document.getElementById("msg").innerHTML="<p style='color:green'> </p>";

}

function saisie_champ(){
    //var nom=null;
    var i;
    for(i=0;i<=8;i++){
        if(document.getElementsByTagName("input")[i].value==""){  
 
        document.getElementsByTagName("span")[i].innerHTML='<i class="fas fa-times" style="color:red"></i>';
        
            
        }
        else
        document.getElementsByTagName("span")[i].innerHTML='<i class="fas fa-check" style="color:green"></i>';

    }
}
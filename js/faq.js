//definiotion de la date
date=new Date().toLocaleDateString(); 
document.getElementById('date').innerHTML=(date);


//navbar
let btn=document.querySelector("#btn");
let btn2=document.querySelector("#btn2");
let sidebar=document.querySelector(".principal");

btn.onclick=function(){
    sidebar.classList.toggle("active");
}
btn2.onclick=function(){
    sidebar.classList.toggle("active");
}

//
let bt=document.querySelector("#bt");
bt.onclick=function(){
    let co=document.getElementById('card-body2');
    co.innerHTML="Si vous êtes un étudiant de l'Université de Yaoundé II ayant suspendu ses études et qui souhaite les reprendre, rendez-vous à la scolarité de votre faculté munis des reçus de l'année de suspension ainsi que toute autre pièce justifiant votre accession au niveau sollicité. Vous serez enregistré dans un fichier des étudiants demandant la réactivation de leurs matricules. Ce fichier sera directement chargé dans l'application des inscriptions en ligne et vous pourrez donc faire votre réinscriptions en utilisant la même procédure que les anciens étudiants. Vous créerez un Quitus de 'Frais de préinscription' d'une valeur de 6000FCFA et un autre Quitus de 'Frais Médicaux' d'une valeur de 5000FCFA, faisant office de frais de réactivation de matricule. Ensuite vous créerez les Quitus des 'Droits universitaires' c'est à dire 1ère Tranche et 2ème Tranche puis irez les payer ces quitus chez l'un des partenaires reconnus de l'Université de Yaoundé II, mentionné sur la plateforme."    
}
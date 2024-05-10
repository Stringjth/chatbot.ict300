function valider(){
//verification
const subname=document.getElementById('prenom')
const nam=document.getElementById('noms')
const date=document.getElementById('Z3')
const lieu=document.getElementById('Z6')
const adresse=document.getElementById('Z9')
const tel=document.getElementById('Z10')
const form=document.getElementById('F1')
const erreur1=document.getElementById('e1')
const erreur2=document.getElementById('e2')
const erreur3=document.getElementById('e3')
const erreur4=document.getElementById('e5')
const erreur5=document.getElementById('e6')
const erreur6=document.getElementById('e7')
const erreurs=document.getElementById('sub')
var bool=true

form.addEventListener('submit', (e) =>{
    //prenom
    //var reglep=/^[a-zA-Z]+([a-zA-Z-]|[ ])+[a-zA-Z]+$/;
    if(subname.value == '' || subname.value == null){
        erreur1.innerText='le prénom est requis'
        document.getElementById('prenom').style.border='1px solid red'
        bool=false
    }
    else{
        document.getElementById('prenom').style.border='1px solid #91c1eb'
        erreur1.style.visibility="hidden"
    }
    //nom
    if(nam.value == '' || nam.value == null){
        bool=false
        erreur6.innerText='le nom est requis'
        document.getElementById('noms').style.border='1px solid red'
    }
    else{
        document.getElementById('noms').style.border='1px solid #91c1eb'
        erreur6.style.visibility="hidden"
    }
    //date
    if(date.value == '' || date.value == null){
        bool=false
        erreur2.innerText='la date est requise'
        document.getElementById('Z3').style.border='1px solid red'
    }
    else{
        document.getElementById('Z3').style.border='1px solid #91c1eb'
        erreur2.style.visibility="hidden"
    }
    //lieu
    if(lieu.value == '' || lieu.value == null){
        bool=false
        erreur3.innerText='le lieu de naissance est requis'
        document.getElementById('Z6').style.border='1px solid red'
    }
    else{
        document.getElementById('Z6').style.border='1px solid #91c1eb'
        erreur3.style.visibility="hidden"
    }
    //adresse
    //var regle=/^[a-zA-Z]+([0-9]|[a-zA-Z-])+[@][a-zA-Z]+[.][a-zA-Z]+$/;
    if(adresse.value == '' || adresse.value == null){
        bool=false
        erreur4.innerText="l'adresse est requise"
        document.getElementById('Z9').style.border='1px solid red'
    }
    else{
        document.getElementById('Z9').style.border='1px solid #91c1eb'
        erreur4.style.visibility="hidden"
    }
    //telephone
    var reglet=/^[6](([5-9][0-9])|([2][0-9]))[0-9][0-9][0-9][0-9][0-9][0-9]$/;
    if(reglet.test(tel.value)==false){
        bool=false
        erreur5.innerHTML='entrer un numéro camerounais'
        document.getElementById('Z10').style.border='1px solid red'
    }
    else{
        document.getElementById('Z10').style.border='1px solid #91c1eb'
        erreur5.style.visibility="hidden"
    }
    //submit
    if(bool==false){
        e.preventDefault()
        document.getElementById('s').style.border='1px solid red'  
        erreurs.innerText='verifier vos champs'
        bool=true
    }
    else{
        document.querySelector("button").type="submit"
    }
})}

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
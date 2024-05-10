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
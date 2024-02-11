document.getElementById("id-1").innerHTML = "This is javascript";
document.getElementById("id-1").style.fontSize = "30px";
document.getElementById("id-1").style.color = "#000000";
document.getElementById("id-1").style.backgroundColor = "red";
document.getElementById("id-1").style.padding = "20px";
document.getElementById("id-1").style.textAlign = "center";

document.getElementsByClassName("class-1")[0].textContent = "Power text change";
document.getElementsByClassName("class-1")[0].style.fontSize = "30px";
document.getElementsByClassName("class-1")[0].style.color = "yellow";
document.getElementsByClassName("class-1")[0].style.backgroundColor = "blue";
document.getElementsByClassName("class-1")[0].style.padding = "20px";
document.getElementsByClassName("class-1")[0].style.textAlign = "right";

document.getElementsByTagName("p")[2].textContent = "work done";
document.getElementsByTagName("p")[2].style.fontSize = "30px";
document.getElementsByTagName("p")[2].style.color = "white";
document.getElementsByTagName("p")[2].style.backgroundColor = "black";
document.getElementsByTagName("p")[2].style.padding = "20px";
document.getElementsByTagName("p")[2].style.textAlign = "left";

const image = document.getElementById("my-img");

function fuc(){
    image.src = "dde.png"
}

document.querySelector(".font").style.color = "red";





const moving = document.getElementById("move");
const moving2 = document.getElementById("move2");


function func2(){
    moving.style.width = "200px";
    moving.style.height = "200px";    
    moving.style.backgroundColor = "red";   
    // moving.style.backgroundImage = "url('dde.png')";
}


function func3(){
    moving2.style.width = "200px";
    moving2.style.height = "200px";    
    moving2.style.backgroundColor = "blue";
}
let openbtn = document.getElementById("openbtn")
let closebtn = document.getElementById("closebtn")
let navbar = document.getElementById("navbar")
let header = document.getElementById("header")
let transform = document.getElementById("transform")

function openMenu(){
    openbtn.style.display = "none";
    closebtn.style.display = "block";
    navbar.style.top = "7rem";
}
function closeMenu(){
    openbtn.style.display = "block";
    closebtn.style.display = "none";
    navbar.style.top = "-100rem";
}
function changescrolltop(){
    header.style.top = "0";
    header.style.width = "100%";
    header.style.borderRadius = "0";
    header.style.boxShadow = "0.1rem .3rem rgba(0, 0, 0, 0.3"; 
}


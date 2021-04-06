require("./bootstrap");
require("alpinejs");
const menuu = document.querySelector('#menu');
const closeX = document.querySelector('#closeX');

addEventListener('DOMContentLoaded', ()=>{
    function changeResolutionScreen(){
        if (innerWidth > 1280) {
            menuu.style.display="block";
            closeX.style.display="none"
        }else{
            menuu.style.display="none";
            closeX.style.display="block"
        }
    }
    
    changeResolutionScreen();
    window.addEventListener('resize', ()=>{
        changeResolutionScreen();
    })
})
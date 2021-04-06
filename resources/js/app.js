require("./bootstrap");
require("alpinejs");
const menuu = document.querySelector('#menu');
const xxx = document.querySelector('#xxx');

addEventListener('DOMContentLoaded', ()=>{
    function ifElse(){
        if (innerWidth > 1280) {
            menuu.style.display="block";
            xxx.style.display="none"
        }else{
            menuu.style.display="none";
            xxx.style.display="block"
        }
    }
    
    ifElse();
    window.addEventListener('resize', ()=>{
        ifElse();
    })
})
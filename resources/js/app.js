require("./bootstrap");
require("alpinejs");
const menuu = document.querySelector('#menu');
const menuEmplo = document.querySelector('#menuEmplo');
const closeX = document.querySelector('#closeX');
const closeXX = document.querySelector('#closeXX');
const heroBG = document.querySelector('#heroIMG');
const menuEmploy = document.querySelector('#botonHeader');


/* Array IMG */
const urlImages = [
    'https://images.unsplash.com/photo-1534120247760-c44c3e4a62f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80',
    'https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80',
    'https://images.unsplash.com/photo-1600783486034-4faaa227e01a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
    'https://images.unsplash.com/photo-1573496546735-c274b1fd186b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
];


addEventListener('DOMContentLoaded', ()=>{
    function changeImage() {   
        var i = Math.floor((Math.random() * 4));
        try {
            heroBG.style.backgroundImage = 'url("' + urlImages[i] + '")';
        } catch (error) {
            console.log('No existe en dashboard el hero');
        }
    }
    window.setInterval(changeImage, 8000);

    function changeResolutionScreen(){
        if (innerWidth > 1280) {
            try {
                menuu.style.display="block";
                closeX.style.display="none"
            } catch (error) {
            }
        }else{
            try {
                menuu.style.display="none";
                closeX.style.display="block"
            } catch (error) {
            }
        }
    }

    function changeResolutionScreen2(){
        if (innerWidth > 1280) {
            try {
                menuEmploy.style="pointer-events:none;"
            } catch (error) {
            }

        }else if(innerWidth>8000){
            menuEmplo.style.display="block";
            closeXX.style.display="none"
        }else{
            try {
                menuEmploy.style="pointer-events:auto;"
                menuEmplo.style.display="none";
                closeXX.style.display="block"
            } catch (error) {
            }
            
        }
    }
    
    changeResolutionScreen();
     changeResolutionScreen2();
    window.addEventListener('resize', ()=>{
        changeResolutionScreen();
        changeResolutionScreen2();
    })
})


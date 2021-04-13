require("./bootstrap");
require("alpinejs");

const menuEmplo = document.querySelector('#menuEmplo');
const closeXX = document.querySelector('#closeXX');
const heroBG = document.querySelector('#heroIMG');

const urlImages = [
    'https://images.unsplash.com/photo-1534120247760-c44c3e4a62f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80',
    'https://images.unsplash.com/photo-1557862921-37829c790f19?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80',
    'https://images.unsplash.com/photo-1600783486034-4faaa227e01a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
    'https://images.unsplash.com/photo-1573496546735-c274b1fd186b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80',
];

addEventListener('DOMContentLoaded', ()=>{
    function changeImage() {   
        var i = Math.floor((Math.random() * 4));
        heroBG.style.backgroundImage = 'url("' + urlImages[i] + '")';
    }
    window.setInterval(changeImage, 8000);

    function changeResolutionScreen2(){
        if (innerWidth > 8000) {
                menuEmplo.style.display="block";
                closeXX.style.display="none"
        }else{
                menuEmplo.style.display="none";
                closeXX.style.display="block"
        }
    }
    

    changeResolutionScreen2();
    window.addEventListener('resize', ()=>{
        changeResolutionScreen2();
    })
})

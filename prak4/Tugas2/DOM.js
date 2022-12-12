const colour = ["#282A3A","#d9f2fd"];
const color = ["#495579", "#ffffff"];
const formColor = ["#808080", "#ffffff"];
let i = 1;
let container = document.getElementsByClassName('card');
let containers = document.getElementsByClassName('form');
document.querySelector('#darkMode').addEventListener('click', 
function(event){
    i++;
    if (i >= colour.length) {
        i = 0;
    }
    document.querySelector("body").style.background = colour[i];
    for (let n = 1; n < container.length; n++) {
        container[n].style.background = color[i];
        containers[n-1].style.background = formColor[i];  
    }
});



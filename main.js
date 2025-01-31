const mainTitle = document.querySelector('h1');
const btn = document.querySelector('button');
const mainSekcja = document.querySelector('main');
let isRed = false;

btn.addEventListener('click', function(){
    if (isRed==true) {
        mainTitle.style.color = '#000000'; 
        isRed = false;
    } else {
        mainTitle.style.color = '#fe0000'; 
        isRed = true;
    }
})

btn.addEventListener('mouseover',function(){
    mainSekcja.innerHTML = "Mysz nad guzikiem"
})
btn.addEventListener('mouseleave',function(){
    mainSekcja.innerHTML = "&nbsp;"
})
////////////////////////////

const h2Element = document.querySelector('h2');
let isMoved = false;

btn.addEventListener('click',function(){
    if(isMoved==true){
    h2Element.style.marginLeft = '0px';
    isMoved=false;
    }
    else{
    h2Element.style.marginLeft = '100px';
    isMoved=true;
    }
    
})

/////////////////////////////
const h3Element = document.querySelector('h2');

let wpisanyTekst = document.getElementById('color').value;
const submit2 = document.querySelector('button');

submit2.addEventListener('click',function(){
    let kolor=wpisanyTekst;
    h3Element.style.color=kolor;
})
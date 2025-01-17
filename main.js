//ZAD1////////////

// function circleArea() { 
//     const promien = prompt("Podaj promień koła:");
//     const pole = Math.PI * Math.pow(promien, 2);

//     if(isNaN(promien)|| promien < 0){
//         document.write("Promien nie jest liczba, popraw to a zadziala");
//     }
//     else{
//         const wynik = `Pole koła o promieniu: ${promien} wynosi: ${pole}`;
//         document.write(wynik);
//     }
    
//  } 

// circleArea();

//ZAD2////////////////

// function rectangleArea(){
//     const a = prompt("Podaj bok a");
//     const b = prompt("Podaj bok b");

//     if(isNaN(a)||isNaN(b)){
//         document.write("Podane dane nie są liczbami, popraw a bedzie dzialac");
//     }
//     if(a<0||b<0){
//         document.write("Podane liczby są mniejsze od 0, wypfisz wieksze a bedzie ok");
//     }
//     else{
//         const pole = a*b;
//         const wynik = `Pole prostokąta o bokach: ${a} i ${b} wynosi ${pole}`;
//         document.write(wynik);
//     }

// }
// rectangleArea();


//ZAD4//////////////

// const days=prompt("Podaj przez ile dni chcesz wynajmowac pokoj");

// if(isNaN(days)){
//     document.write("dni nie są liczbami, popraw to a bedzie smigac");
// }
// else{
//     function rentCost(days){


//         if(days==1){
//             koszt=200;
            
//         }
//         if(days>=2 && days <=3){
//             koszt = 180*days;
            
//         }
//         if(days>=4 && days <=7){
//             koszt=160*days;
            
//         }
//         if(days>=8){
//             koszt=150*days;
            
//         }
        
//         document.write(`Calkowity koszt wynajmu bez znizki wynosi: ${koszt}zl`);
    
//         //znizka
//         if(days>7){
//             let znizka = Math.floor(days/7)*50;
//             document.write(` czyli w sumie zaplacisz: ${koszt-znizka}zl`);
//         }
    
    
       
//     }
//     rentCost(days);
// }



//ZAD3//////////////

// function generateRandom(min,max){
//     const min = 1;  // prompt("Podaj pierwsza liczbe z zakresu");
//     const max = 20;  //prompt("Podaj drugą liczbę z zakresu");
    
    
  
//     for (let index = 0; index < 10; index++) {
//         const randomLiczba = Math.floor(Math.random()*(max-min+1)+min);
//         document.write(`${randomLiczba}, `);
//     }
// }




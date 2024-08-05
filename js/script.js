//Dátum/Idő futtatása

const dateElement = document.querySelector('#date');
const timeElement = document.querySelector('#time');

function whichDay(){
    const d = new Date();
    const days = ["Vasárnap", "Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat"];
    return document.querySelector('#day').innerHTML = days[d.getDay()];
}

setInterval (function(){
    dateElement.textContent = new Date().toLocaleDateString('hu-HU');
})

function displayTime(){
    timeElement.textContent = new Date().toLocaleTimeString('hu-HU');
}

whichDay();
displayTime();

setInterval (displayTime, 1000);


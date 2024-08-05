//Dátum/Idő futtatása

const dateElement = document.querySelector('#date');
const timeElement = document.querySelector('#time');

setInterval (function(){
    dateElement.textContent = new Date().toLocaleDateString('hu-HU');
})

function displayTime(){
    timeElement.textContent = new Date().toLocaleTimeString('hu-HU');
}

displayTime();

setInterval (displayTime, 1000);


$(document).foundation();

$(document).ready(function() {
    setInterval(cambiarColor, 100);
    
    var cambiarColor = function() { 
        $("#botonnav").css("background-color", "rgb(" + Math.floor(Math.random()*255) +                         ","+Math.floor(Math.random()*255)+","+Math.floor(Math.random()*255)+")");
    }
});
$(document).ready(function(){

    /*Animación Inicial*/
    $('#contentWrapper').animate({opacity: 0, left: +100}, 1);

    $('#wrapper').animate({opacity: 0, left: +100}, 1);

    $('#wrapper').animate({left: -0, opacity: 1},500);

    $('#contentWrapper').animate({left: -0, opacity: 1},1000);
});


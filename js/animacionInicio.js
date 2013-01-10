$(document).ready(function(){

    /*Animación Inicial*/
    $('#contentWrapper').animate({opacity: 0, left: +100}, 1);
    $('#previewSlider').animate({paddingLeft: +500},1);

    $('#wrapper').animate({opacity: 0, left: +100}, 1);

    $('#wrapper').animate({left: -0, opacity: 1},500);

    $('#contentWrapper').animate({left: -0, opacity: 1},1000);

    $('#section_links').animate({marginTop: -500,opacity:0},1);

    $('#mainBanner').animate({marginTop: -360,opacity:0},1);


    /*Animacion Home*/

    $('#previewSlider').animate({paddingLeft: 0},1000);
    $('#section_links').animate({marginTop: 35,opacity:1},1000);
    $('#mainBanner').delay(700).animate({marginTop: 0,opacity:1},500);
});


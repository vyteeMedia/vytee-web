$().framerate({framerate: 120, logframes: true});
$(document).ready(function(){

    /*Animación Inicial*/
    $('#welcomeContainer').animate({opacity: 0}, 1);
    $('#englishLink').animate({opacity: 0}, 1);
    $('#welcomeMessage').animate({opacity: 0}, 1);
    $('#vyteeLogo').animate({opacity: 0}, 1);
    $('#welcomeLogoText').animate({opacity: 0}, 1);

    $('#vyteeLogoStart').animate({left: 0 }, 1000, function() {
        $('#welcomeLogoText').animate({top: 0, opacity: 1}, 1000, function() {
            $('#welcomeContainer').delay(2000).animate({top: 0, opacity: 1}, 1000, function() {
                $('#englishLink').animate({right: 820, opacity: 1}, 500, function() {
                    // Animation complete.
                });
                $('#welcomeMessage').animate({right: 350, opacity: 1}, 500, function() {
                    // Animation complete.
                });
                $('#vyteeLogo').animate({right: 0, opacity: 1}, 500, function() {
                    // Animation complete.
                });
            });
        });
    });

    /*Animación Banner 1*/
    $('#banner1ADS').delay(6000).fadeIn(3000);
    $('#banner1TEXT').delay(8000).fadeIn(2000);
    $('#banner1').delay(11000).fadeIn(2000);
    $('#banner1ADS').delay(3000).fadeOut(1000);
    $('#banner1Container').delay(18000).animate({opacity: 0}, 700);

    /*Animación Banner 2*/
    $('#banner2ADS').delay(18000).fadeIn(3000);
    $('#banner2TEXT').delay(20000).fadeIn(2000);
    $('#banner2').delay(22000).fadeIn(2000);
    $('#banner2ADS').delay(2000).fadeOut(1000);
    $('#banner2Container').delay(26000).animate({opacity: 0}, 700);

    /*Animación Banner 3*/
    $('#banner3ADS').delay(26000).fadeIn(3000);
    $('#banner3TEXT').delay(28000).fadeIn(2000);
    $('#banner3').delay(31000).fadeIn(2000);
    $('#banner3ADS').delay(3000).fadeOut(1000);
    $('#banner3Container').delay(38000).animate({opacity: 0}, 700);

    /*Animación Banner 4*/
    $('#banner4').delay(36000).fadeIn(5000);
    $('#banner1Container').delay(24000).animate({opacity: 1}, 3000);
    $('#banner1').delay(24000).fadeIn(3000);
    $('#banner1TEXT').delay(20000).fadeOut(1);
    $('#banner4').delay(50000).fadeOut(1000);
});


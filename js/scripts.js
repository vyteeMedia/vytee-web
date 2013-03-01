
$(document).ready(function(){
	botones();
});

function botones(){
	$("#menu li").click(function(){
		$(this).addClass('encima');
		$(this).siblings().removeClass('encima');
		var id = parseInt(this.id);
		var cant = (id-1)*780;
		$('#slide').animate({'left':-cant});
	});

	$("#menu2 li").click(function(){
		$(this).addClass('encima');
		$(this).siblings().removeClass('encima');
		var id = parseInt(this.id);
		var cant = (id-1)*780;
		$('#sliderTipos').animate({'left':-cant});
	});


	$("#menu3 li").click(function(){
		$(this).addClass('encima');
		$(this).siblings().removeClass('encima');
		var id = parseInt(this.id);
		$('.sliderChico .'+id).siblings().removeClass('mostrar');
		$('.sliderChico .'+id).addClass('mostrar');
	});
}



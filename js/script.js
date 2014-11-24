$(document).on("ready",function(){
	//=============================================================================
	$(".ilustra").hover(function() {
    	$( this ).addClass("animated pulse");
  	},function(){
    	$( this ).removeClass( "animated pulse");
  	});
	
});

$(function(){
	main.init();
});
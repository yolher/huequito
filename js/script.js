var x = jQuery.noConflict();
x(document).on("ready",function(){
	//=============================================================================
		x("a.control").toggle(function(){
		x("nav ul").fadeIn(200);
	},function(){
		x("nav ul").fadeOut(200);
	})
	

});
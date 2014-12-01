var x = jQuery.noConflict();
x(document).on("ready",function(){
	//=============================================================================
		x("a.control").toggle(function(){
		x("#navMovil").slideDown(200);
	},function(){
		x("#navMovil").fadeOut(200);
	})
		/*x("nav ul li ").on('mouseover',function(){
			console.log('hkh');
			x("nav ul li ul").slideDown(300);
		}).mouseleave(function(){
			x("nav ul li ul").slideUp(300);
		});*/


	// banener principal
 
 
    x(function() {
      x('#slides').slidesjs({
        width: 940,
        height: 400,
        play: {
          active: false,
          auto: true,
          interval: 4000,
          swap: true
        },
        navigation: {
      		active: false,        
      	},
      	pagination: {
      		active: true,
      		effect: "fade"
      	}
      });
    });
 
		

});
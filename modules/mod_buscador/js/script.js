var x = jQuery.noConflict();
x(document).on("ready",function(){
	    //================ acciones para el buscador ===========

    x("#resultSearch .close").on("click",function(){
      x("#resultSearch").slideUp(300);
    });

    x("button#buscar").on("click",function(){
      var valor = x("input#into").val();

      if (valor == '') {
        alert("Por favor realize una busqueda");
        x("input#into").focus();
      }else{
        
         x.ajax({
          type: "GET",
          data:{campo:valor},
          url: "gestion/controller/buscador_controller.php",
          beforeSend: function(){
            console.log("enviando");
          },
          success: function(data){
            //console.log(data);
            var data = JSON.parse(data);
            var alerta = "error";
            var obj = [];

            x.each(data,function(id,item){
              if (item.alerta == alerta) {
                obj.push('<li><p>No se encontraron registros</p></li>');
              }else{
                var nombre = '<a href="'+item.url+'" alt="'+item.nombre+'" title="'+item.nombre+'"><div class="tituloSearch">'+item.nombre+'</a></div>';
                var desc = '<p>'+item.descript+'</p>';
                var more = '<div class="readMore"><a href="'+item.url+'" alt="'+item.nombre+'" title="'+item.nombre+'">Ver más</div></a>';

                obj.push('<li>'+nombre+desc+more+'</li>');
              }              
            })

            x("#resultSearch ul").html(obj.join(""));
            x("#resultSearch").slideDown(300);
          },
          complete: function(){
            console.log("terminado");
          }
        });//-- end buscador

      };//-- end if

    })//-- end on click buscador

 

});
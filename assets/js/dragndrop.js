  $( function() {
 
	$( ".drag" ).draggable({
	    containment: "document", 
	    helper: "clone",
	    cursor: "move"
	});

	$( ".drop" ).droppable({
		classes: {
        "ui-droppable-active": "ui-state-highlight"
      },
		drop: function (event, ui){
			adicionaAtributo(ui.draggable);

		},
 		out: function (event, ui) {
        $(ui.draggable).fadeOut(1000, function() {
            removeAtributo($atributo);
        });
    }
});

function adicionaAtributo($atributo){
	$atributo.appendTo('form');
	$atributo.find('.inputAtributo').css({'display': 'inline', 'z-index': '1'});
    $(".drop").find('#botao').css({'display': 'inline','position':'absolute','margin-top':'41em', 'margin-left':'22em'});
	//  resolvi o bug de habilitar o input pesquisando pela class do this, antes estava mudando a do proprio this, mas não a do class	
}
function removeAtributo($atributo){
			$atributo.detach();
            $atributo.appendTo(".campo-inicial");
            $atributo.find('.inputAtributo').css('display','none');
            $atributo.fadeIn();
            $( ".drag" ).draggable({	 
			    containment: "document", 
			    helper: "clone",
			    cursor: "move"	
			});
}
	});
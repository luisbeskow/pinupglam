$(
	function(){
		$('.js-esconder').hide();
		
		$('.imagem')
			.mouseover( function() {
				$(this).children().stop().fadeTo('fast', 0.8);
				
				
				
			})
			.mouseleave( function(){
					$(this).children().stop() .fadeTo('fast', 1);
				
				
				
			});
		
	}





);

function exibeCategoria(id) {
	$(
		function(){
		$('.grupo-imagens').hide();
		$('#grupo' + id).fadeIn();
		}
	
	);
	
	
}
	window.alert("Confira um pouco do nosso trabalho")
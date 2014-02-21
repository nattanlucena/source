	$(document).ready(function(){
				$('.remove').bind( "click", function(){ 
					id = $(this).attr("id");

					if( confirm("Tem certeza que deseja remover o servidor " + id + "?") ){
						$.ajax({
							type: 'GET',
							url: './Controller/ServidorController.php?acao=deletar',
							data: 'id=' + id,
							success: function(){
								 window.location.reload();	
							} 
							
						});
					}

					return false;
				});
			});
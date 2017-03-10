<!DOCTYPE html>
	<html>
		<head> 
			<title> Pinup Glam </title>

		<script src="jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="jquery.maskedinput.js" type="text/javascript"></script>
        <script src="mascaras.js" type="text/javascript"></script>
        <style type="text/css"> 
		#tabela_form{
			margin: 2% auto;
				
}
			
#form{
				margin: 10% auto;
				font-size: 1.2em;
				border: 1px solid #000;
				border-top-left-radius: 60px;
				border-bottom-right-radius: 60px;
				box-shadow: -4px -5px 5px #000;
				width: 20%;
				
				
}
			
			#conteudo_contato{
					
					width: 90%;
					height: 800px;
					margin: 2% auto;
				
			}
			
	input{
				padding: 1% 0;
				text-transform: uppercase;
				
}
textarea{
				text-transform: uppercase;
		}
			
			.btn{
				border-radius: 60px;
				padding: 5%;
				margin-top: 2%;
				font-weight: bold;
				width: 80%;
	

}

		
		
		</style>

		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="jquery.maskedinput-1.3.1.min.js"></script>

        <style type="text/css"> </style>

		<link rel="stylesheet" href="estilo.css" type="text/css">
		

		
		<?php

		include('topo.php');
		
		?>
		

		</head>
		<body>
		
		<div id="conteudo_contato">
		<h2> FALE CONOSCO </h2>
			<form id="form" action="enviar_contato.php" method="post">
				<table id="tabela_form">
				
					<thead>

						
					</thead>
					<tbody>
						 
						
						
						<tr>
							<td> <label for="nome"> NOME: </label> </td>
							<td> <input type="text" class="nome" id="nome" name="nome" size="40" required> </td>
						</tr>
						
						<tr>
							<td> <label for="tel"> TELEFONE: </label> </td>
							<td> <input type="tel" class="tel" id="tel" name="tel" size="40" placeholder="" required>
                             </td>
						</tr>
						
						
						<tr>
							<td> <label for="email"> E-MAIL: </label> </td>
							<td> <input type="email" class="email" id="email" name="email" size="40" required> </td>
						</tr>
						<tr>
							<td> <label for="msg"> MENSAGEM: </label> </td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4"> <textarea rows="15" cols="70" class="mensagem" id="mensagem" name="mensagem"  required > </textarea> </td>
						</tr>
						<tr>
							<td> <input type="submit" value="enviar" id="enviar" name="enviar" class="btn"> </td>
						</tr>
					</tfoot>		
				
				</table>
			</form>
			
			</div>	
		
        <script type="text/javascript">// <![CDATA[
jQuery(function($) {
    $.mask.definitions['~']='[+-]';
    //Inicio Mascara Telefone
	$('input[type=tel]').mask("(99) 9999-9999?9",{ "placeholder": "  "}).ready(function(event) {
		var target, phone, element;
		target = (event.currentTarget) ? event.currentTarget : event.srcElement;
		phone = target.value.replace(/\D/g, '');
		element = $(target);
		element.unmask();
		if(phone.length > 10) {
			element.mask("(99) 9999-9999?9");
		} else {
			element.mask("(99) 99999-999?9");
		}
	});
   });
// ]]>
</script>
        
        
		</div>
		
		<?php

		include('baixo.php');
		
		?>		
		
		</body>
		
	</html>
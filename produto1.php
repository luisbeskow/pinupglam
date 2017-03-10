<!DOCTYPE html>
	<html>
		<head> 
			<title> Pinup Glam </title> 
		<link rel="stylesheet" href="estilo.css" type="text/css">
		
		<style type="text/css"> 
		
		#conteudo_produto{
		width: 90%;
		height: auto;
		margin: 0 auto 5%;
		}
		
		#texto_produto{
			text-align: justify;
			width: 50%;
			margin: 3% auto 10%;
			
		}
		
		
		.produto{
			width: 50%;
			height: auto;
			float: center;
			margin: 8% auto 0;

			
		}
		
		.imagem_produto{
			width: 30%;
			float: center;
			margin: 0 auto;
			
		}
		
		

		</style>
		
		<?php

		include('topo.php');
		
		?>
		
		</head>
		<body>
		
		<div id="conteudo_produto">
			
			<h1> Produto1 </h1>
			
			<div id="texto_produto">
			
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed rutrum lorem. Etiam posuere lectus nulla, vitae convallis massa feugiat vitae. Ut et finibus metus, non posuere odio. Nam efficitur erat at augue efficitur, nec molestie orci rhoncus. Ut eu diam lectus. Etiam vitae est condimentum, dignissim felis venenatis, tristique ligula. Duis faucibus egestas libero, sed hendrerit lacus congue in. Etiam molestie leo eu mauris placerat pretium. Sed a neque massa. Maecenas vitae metus sodales, elementum arcu eget, volutpat ex. Aliquam auctor cursus magna in tincidunt. Suspendisse feugiat ligula lacus, non placerat nunc tempus nec. Vivamus nec maximus sem.</p>
				</br>
				
			</div>
			
			<div class="produto">
			<center> <img src="img/1.png" class="imagem_produto"/> </center>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed rutrum lorem. Etiam posuere lectus nulla, vitae convallis massa feugiat vitae. t condimentum, dignissim felis venenatis, tristique ligula. Duis faucibus egestas libero, sed hendrerit lacus congue in. </p>
	
			
			</div>
			
			<div class="produto">
			<center> <img src="img/1.jpg" class="imagem_produto"/> </center>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed rutrum lorem. Etiam posuere lectus nulla, vitae convallis massa feugiat vitae. t condimentum, dignissim felis venenatis, tristique ligula. Duis faucibus egestas libero, sed hendrerit lacus congue in. </p>
	
			
			</div>
			
			<div class="produto">
			<center> <img src="img/1.png" class="imagem_produto"/> </center>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed rutrum lorem. Etiam posuere lectus nulla, vitae convallis massa feugiat vitae. t condimentum, dignissim felis venenatis, tristique ligula. Duis faucibus egestas libero, sed hendrerit lacus congue in. </p>
	
			
			</div>
		
		</div>
		
		<?php

		include('baixo.php');
		
		?>		
		
		</body>
		
	</html>
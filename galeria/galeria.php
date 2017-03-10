<!DOCTYPE.html>
<html lang="pt-br">
 <head>
	<meta charset="utf-8" />
   <title> Galeria </title>
   
	<style type="text/css">
	*{
		margin: 0 ;
		padding: 0 ;
		
	}
	
	body{
		font: bold 12px Sans-serif;
		margin: 3em;
		background-color: 3d3d3d ;
		
	
	}
	#caixa-galeria{
		background-color: #f5dfed;
		
		height: 500px;
		widht: 810px;
		
		border-top-left-radius: 50px;
		border-bottom-right-radius: 50px;
		
		-webkit-border-top-left-radius: 50px;
		-webkit-border-bottom-right-radius: 50px;
		
		-moz-border-top-left-radius: 50px;
		-moz-border-bottom-right-radius: 50px;
		
		box-shadow: 1px 1px 3px ;
	}
	
	#galeria-botoes{
		height: 60px;
		width: 600px;
	
	}
	
	.botao{
	
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fcfcfc+0,eaeaea+100 */
		background: rgb(252,252,252); /* Old browsers */
		background: -moz-linear-gradient(top,  rgba(252,252,252,1) 0%, rgba(234,234,234,1) 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(252,252,252,1)), color-stop(100%,rgba(234,234,234,1))); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  rgba(252,252,252,1) 0%,rgba(234,234,234,1) 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  rgba(252,252,252,1) 0%,rgba(234,234,234,1) 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  rgba(252,252,252,1) 0%,rgba(234,234,234,1) 100%); /* IE10+ */
		background: linear-gradient(to bottom,  rgba(252,252,252,1) 0%,rgba(234,234,234,1) 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#eaeaea',GradientType=0 ); /* IE6-9 */


		color:#717171;
		height: 35px;
		margin: 10px;
		text-align: center;
		width: 120;
		float: left;
		
		border-color: #CFCDCD #C0BEBE #C0BEBE #CFCDCD;
		border-style: solid;
		border-width: 1px;
		
		box-shadow: 1px 1px 1px #c0BEBE;
		
		line-height: 35px;
	}
	
	.botao:hover {
		color:#484747;
		border: 1px solid #989797;
		box-shadow: 1px 1px 1px #989797;
		cursor: pointer;
		
	}
	
	#galeria{
		width: 90%;
		
	
	}
	
	ul, li{
		list-style: none;
		
	
	}
	
	ul li{
		margin: 1em;
		float:left;
	
	}
	
	.imagem{
		background-color: #fafafc;
		border: 1px solid #a3a3a3;
		padding: 5px;
				
		width: 250px;
		height: 250px;
		
	}
	
	
		
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="codigo-jquery.js"> </script>
	

 </head> 
  
 <body>
  
	
	 
	  <center>
		<div id="caixa-galeria">
			<div id="galeria-botoes">
				<div class="botao" id="botao1" onClick="exibeCategoria('1');"> MegaHair </div>
				<div class="botao" id="botao2" onClick="exibeCategoria('2');"> Afro </div>
				<div class="botao" id="botao3" onClick="exibeCategoria('3');"> Sombrancelhas </div>
				<div class="botao" id="botao4" onClick="exibeCategoria('4');"> Perucas </div>
				
			</div>
			<div id="galeria">
			<!-- mega hair -->
				<div class="grupo-imagens" id="grupo1">
					<ul>
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem1.jpg" width="250px" height="250px" alt="imagem" /></a>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem2.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem3.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem4.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						

					</ul>
					
					<ul>
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem5.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem6.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem7.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/mega/imagem8.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
					
					
				
				</div>
				<!--afro -->
				<div class="grupo-imagens js-esconder" id="grupo2">
					<ul>
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>

					</ul>
					
						<ul>
						<li> 
							<div class="imagem">
							<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/afro/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>

					</ul>
				
				</div>
				<!--sombrancela -->
				<div class="grupo-imagens js-esconder" id="grupo3">
					<ul>
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150" alt="imagem"/>
						</li>

					</ul>
					
						<ul>
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150/sports" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150/sports" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150/sports" alt="imagem"/>
						</li>
						
						<li> 
							<div class="imagem">
								<img src="http://www.lorempixel.com/150/150/sports" alt="imagem"/>
						</li>

					</ul>
					
									
				</div>
				<!-- Perucas -->
				<div class="grupo-imagens js-esconder" id="grupo4">
					<ul>
						<li> 
							<div class="imagem">
								<img src="img/Peruca/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/Peruca/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/Peruca/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>
						
						<li> 
							<div class="imagem">
								<img src="img/peruca/imagem1.jpg" width="250px" height="250px" alt="imagem" />
						</li>

					</ul>
			</div>
		</center>
	  
	
 </body>
</html>
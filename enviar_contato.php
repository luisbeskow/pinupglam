	<?php
//Variáveis

$quebra_linha = "\n";

$assunto = $_REQUEST['assunto'];
$nome = $_REQUEST['nome'];
$tel = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$mensagem =  wordwrap( $mensagem, 70, "<BR>", 1);
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

////////////////////////////////////////// Compo E-mail cliente ////////////////////////////////////////////////////////////////////
<<<<<<< HEAD
  $arquivocliente = "
<html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>Entre em contato conosco</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>

<style type='text/css'>



.redes1{
	float: right;
	margin-right: 2%;
	opacity: 0.7;
}


.redes1:hover{
	opacity: 1.0;
}
</style>






<body style='margin: 0; padding: 0;'>
	<table border='0' bgcolor='CFCFCF' cellpadding='0' cellspacing='0' width='100%' height='100%'>	
		<tr>
			<td>
			  <table align='center' border='0' cellpadding='0' cellspacing='0' width='666' style='border: 1px solid #cccccc; border-collapse: collapse;'>
					<tr>
						<td height='80' align='center' bgcolor='#FFFFFF' style='padding: 15px 0 15px 0; color: #FFFFFF; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'>
                        <a href='http://www.pinupglam.com.br/'><img align='center' src='http://www.pinupglam.com.br/img/banner.png' alt='Banner' width='200' height='80' style='display: block;' border='0' />	</a>					
						</td>
					</tr>
					<tr>
						<td bgcolor='#FFFFFF' style='padding: 30px 20px 20px 20px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #000000; font-family: Arial, sans-serif; font-size: 24px;'>
										<b>Obrigado pelo contato no nosso site, $nome!</b>
									</td>
								</tr>
								<tr>
									<td style='padding: 20px 15px 20px 15px; color: #000000; font-family: Arial, sans-serif; font-size: 20px; line-height: 20px;'>
										<p align='justify'>Em breve iremos retorna-lo. </p></td>
								</tr>
								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='300' valign='top'>
													<table border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															<td style='padding: 20px 10px 20px 10p;'>
																<table width='600' border='0' cellpadding='3' bgcolor='FFFFFF' align='center'>
              <tr>
              	<td width='200px' height='200px'><a href='http://www.pinupglam.com.br/produto1.php'><img width='200px' height='200px' src='http://www.pinupglam.com.br/img/1.png'></a></td>
                <td width='200px' height='200px'><a href='http://www.pinupglam.com.br/produto1.php'><img width='200px' height='200px' src='http://lorempixel.com/output/fashion-q-c-200-200-3.jpg'></a></td>
                <td width='200px' height='200px'><a href='http://www.pinupglam.com.br/produto1.php'><img width='200px' height='200px' src='http://www.pinupglam.com.br/img/1.jpg'></a></td>
              </tr>
        
        </table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
                                <tr>
								  <td style='padding: 20px 10px 20px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>Por favor não responda a este email!<br/></td>
								</tr>
   



							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#FFFFFF' style='padding: 10px 10px 10px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #FFFFFF; font-family: Arial, sans-serif; font-size: 14px;' width='500'>
										<p align='center'></p>
								  </td>
                                    <td><a href='https://twitter.com/PinUpGlamOficia'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/twitter.png' alt='Twitter' style='width:60px; height: 60px;'/></a></td>
                                    <td><a href='https://www.instagram.com/pinupglam_oficial/'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/instagram.png' alt='instagram' style='width:60px; height: 60px;'/></a></td>
                                    <td><a href='https://www.facebook.com/pinupglamoficial/'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/facebook.png' alt='Facebook' style='width:60px; height: 60px;' /></a></td>
					
											</tr>
										</table>
									</td>
				  				</tr>
							</table>
						</td>
					</tr>
				
			</td>
		</tr>
	</table>
</body>
</html>
";
  ///////////////////////////////////////////////////////////// fim composicao email cliente ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
  
  
  
  ////////////////////////////////////////// Compo E-mail admin ////////////////////////////////////////////////////////////////////
  $arquivoadmin = "
=======
  $arquivo = "
>>>>>>> 15b5a2ba46125fc89abae8fd5fe442aaba817653
<html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<link rel='stylesheet' href='estilo_contato.css' type='text/css'>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>Entre em contato conosco</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body style='margin: 0; padding: 0;'>
	<table border='0' bgcolor='CFCFCF' cellpadding='0' cellspacing='0' width='100%' height='100%'>	
		<tr>
			<td>
			  <table align='center' border='0' cellpadding='0' cellspacing='0' width='666' style='border: 1px solid #cccccc; border-collapse: collapse;'>
					<tr>
						<td height='80' align='center' bgcolor='#f5f5f5' style='padding: 15px 0 15px 0; color: #FFFFFF; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;'>
                        <img align='center' src='http://www.pinupglam.com.br/img/banner.png' alt='Banner' width='200' height='80' style='display: block;' border='0' />						
						</td>
					</tr>
					<tr>
						<td bgcolor='#FFFFFF' style='padding: 30px 20px 30px 20px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
								<tr>
									<td style='color: #000000; font-family: Arial, sans-serif; font-size: 24px;'>
										<b>Obrigado pelo contato, $nome!</b>
									</td>
								</tr>
								<tr>
									<td style='padding: 20px 15px 20px 15px; color: #000000; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
										<p align='justify'>A mensagem com as informa&ccedil;&otilde;es abaixo foram recebidas no dia <b>$data_envio</b> &agrave;s <b>$hora_envio</b>.</p></td>
								</tr>
								<tr>
									<td>
										<table border='0' cellpadding='0' cellspacing='0' width='100%'>
											<tr>
												<td width='260' valign='top'>
													<table border='0' cellpadding='0' cellspacing='0' width='100%'>
														<tr>
															<td style='padding: 20px 10px 20px 10p; color: #000000; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
																<table width='500' border='0' cellpadding='2' cellspacing='1' bgcolor='f5f5f5' align='center'>
                                                                
                                                                
              <tr>
              	<td width='20'>Assunto:</td><td width='300'><strong>$assunto</strong></td>
              </tr>
              
              <tr>
              	<td width='20'>Nome:</td><td width='300'><strong>$nome</strong></td>
              </tr>
             
              <tr>
                  <td width='20'>E-mail:</td><td width='300'><strong>$email</strong></td>
   			  </tr>
              
              <tr>
                  <td width='20'>Telefone:</td><td width='300'><b> $tel</b></td>
             </tr>
            
            <tr>
                  <td width='20'>Mensagem:</td><td width='300'>$mensagem</td>
            </tr> 	 			  
             
        </table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
									</td>
								</tr>
                                <tr>
								  <td style='padding: 20px 10px 20px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>Esta mensagem foi direcionado ao seu email pelo contato do site da Pinup Glam!<br/></td>
								</tr>
   



							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor='#FFFFFF' style='padding: 10px 10px 10px 10px;'>
							<table border='0' cellpadding='0' cellspacing='0' width='100%'>
									<tr>
									<td style='color: #FFFFFF; font-family: Arial, sans-serif; font-size: 14px;' width='500'>
										<p align='center'></p>
								  </td>
                                    <td><a href='https://twitter.com/PinUpGlamOficia'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/twitter.png' style='width:60px; height: 60px;'alt='Twitter'/></a></td>
                                    <td><a href='https://www.instagram.com/pinupglam_oficial/'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/instagram.png' style='width:60px; height: 60px;'alt='Instagram'/></a></td>
                                    <td><a href='https://www.facebook.com/pinupglamoficial/'><img align='center'  class='redes1' id='redes1' name='redes1' src='http://www.pinupglam.com.br/img/facebook.png' style='width:60px; height: 60px;'alt='Facebook' /></a></td>
					
											</tr>
										</table>
									</td>
				  				</tr>
							</table>
						</td>
					</tr>
				
			</td>
		</tr>
	</table>
</body>
</html>
";
  ///////////////////////////////////////////////////////////// fim composicao email cliente ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  
  	$empresa = "Pin up Glam";
	$emailadmin = "dev@pinupglam.com.br";
	$emailcliente = $email;
  
  ///////////////////////////////////////////////////////////////////// email para o cliente //////////////////////////////////////////////
  //enviar  
  // emails para quem será enviado o formulário
  $remetente=$emailadmin;
  $destino = $emailcliente;
  
  $assunto = $empresa." - ".$nome." - ".$assunto;

  // É necessário indicar que o formato do e-mail é html
  	  $headers = "MIME-Version: 1.1".$quebra_linha;
      $headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	  $headers .= "To: Pinupglam <dev@pinupglam.com.br>,".$quebra_linha;
      $headers .= "From: ".$nome."<".$emailcliente.">".$quebra_linha;
	  $headers .= "Bcc: ".$nome."<".$emailcliente.">".$quebra_linha;
	  
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  ///////////////////////////////////////////////////////////////////// fim email cliente //////////////////////////////////////////////
  
			  $enviar = mail($destino, $assunto, $arquivo,$headers,"-r". $remetente);
			  

<<<<<<< HEAD
  // É necessário indicar que o formato do e-mail é html
  	  $headersadmin  = "MIME-Version: 1.1".$quebra_linha;
      $headersadmin .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
      $headersadmin .= "From: ".$remetenteadmin.$quebra_linha;
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  ///////////////////////////////////////////////////////////////////// fim email adminsitrador //////////////////////////////////////////////
  
			  $enviarcliente = mail($destinocliente, $assuntocliente, $arquivocliente,$headerscliente,"-r". $remetentecliente	);
			  $enviaradmin = mail($destinoadmin, $assuntoadmin, $arquivoadmin, $headersadmin,"-r".$remetenteadmin);

if($enviarcliente)
=======

if ($enviar)
>>>>>>> 15b5a2ba46125fc89abae8fd5fe442aaba817653
{

	  if ( empty($assunto) || empty($nome) || empty($tel) || empty($email) || empty($mensagem))
	  {
		  
		  echo ("<script>
		  {	
		  alert('Por favor preencha todos os campos!')
		  javascript:window.history.go(-1);
		  }
		  </script>");
	  }
	  
	  else
	  {
		  if(filter_var($email,FILTER_VALIDATE_EMAIL))
		  {

		  	  echo ("<script>
			  {
		  	  alert('Contato enviado com sucesso! Aguarde nossa resposta');
		      location.href='index.php';
		      }
		      </script>");
	  	  }
		  
		  else
		  {
			  echo ("<script>
		 	  {	
		  	  alert('Por favor digite um email valido!')
			  javascript:window.history.go(-1);
			  }
			  </script>");
	 	  }
			  
	  }
}

else
{
	echo ("<script>
		 	  {	
		  	  alert('Houve um erro ao enviar o contato!')
			  location.href='contato.html';
			  }
			  </script>");
}
	


?>

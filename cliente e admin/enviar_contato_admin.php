	<?php
//Variáveis

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

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
  $arquivoadmin = "
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
										<b>Voce recebeu um contato de $nome!</b>
									</td>
								</tr>
								<tr>
									<td style='padding: 20px 15px 20px 15px; color: #000000; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;'>
										<p align='justify'>Você recebeu  a mensagem com as informa&ccedil;&otilde;es abaixo no dia <b>$data_envio</b> &agrave;s <b>$hora_envio</b>.</p></td>
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
							<table border='1' cellpadding='0' cellspacing='0' width='100%'>
								 <tr>
								  <td align='center' style='padding: 20px 10px 20px 10px; color: #000000; font-family: Arial, sans-serif; font-size: 20px;'>Email de contato - Pinup glam!<br/></td>
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
  
  ///////////////////////////////////////////////////////////////////// email para o cliente //////////////////////////////////////////////
  //enviar  
  // emails para quem será enviado o formulário
  $remetenteadmin=$email;
  $destinoadmin = $emailadmin;
  $assuntoadmin = $nome." - ".$assunto;

  // É necessário indicar que o formato do e-mail é html
  	  $headers = "MIME-Version: 1.1".$quebra_linha;
      $headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
	  $headers .= "From: ".$nome."<".$email.">".$quebra_linha;
	  $headers .= "To: Pinupglam <".$emailadmin.">,".$quebra_linha;
	  
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  ///////////////////////////////////////////////////////////////////// fim email cliente //////////////////////////////////////////////
  

$enviaradmin = mail($destinoadmin, $assuntoadmin, $arquivoadmin,$headers,"-r". $remetenteadmin);



	  	  if ($enviaradmin)
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
			  alert('Contato enviado com sucesso! Aguarde nossa aprovacao')
		      location.href='index.html';
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
			  }
			  </script>");
}
	
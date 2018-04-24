
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="date" content="2018-02-28T09:14:17+00:00">
<meta name="author" content="tiac94">
<meta name="description" content="Esto es una plantilla">
<meta name="keywords" content="Palabras clave">
<meta name="DC.Subject" content="Plantilla">
<meta name="DC.Title" content="Plantilla">
<meta name="DC.Identifier" content="tiac94">
<meta name="DC.Publisher" content="tiac94">
<meta name="DC.Language" content="es">
<meta name="DC.Date" content="2018-02-28">
<meta name="DC.Creator" content="tia94">
<meta name="DC.Description" content="Esto es una plantilla">
<title>Plantilla | Contacto</title>
<link href="fitxers/estilo.css" rel="stylesheet" type="text/css">
<script src="fitxers/jquery-1.js"></script>
<script type="text/javascript" src="fitxers/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
    });
</script>
<script type="text/javascript" src="fitxers/highslide-full.js"></script>
<script type="text/javascript" src="fitxers/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="fitxers/highslide.css">
<script type="text/javascript">
hs.graphicsDir = 'js/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.showCredits = false;
hs.wrapperClassName = 'draggable-header';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
</head>
<script type="text/javascript">
function iniciar()
	{
		registro=document.getElementById("formulario");
		nombre=document.getElementById("nombre");
		
		
		registroSubmit=document.getElementById("enviar");

		enviado=document.getElementById("enviadoexito");
		/*
		El evento input se producirá cada vez que se pulse una tecla
		*/
		nombre.addEventListener("input", enviar, false);
		registroSubmit.addEventListener("click", enviar, false);
		
	}
	
	function enviar()
	{
		enviado.setAttribute('style', 'display: none');
		if(registro.checkValidity())
		{	
			registro.submit();
		}
	}
	
	window.addEventListener("load", iniciar, false);

</script>
<body style="padding:0px; margin:0px">
<table style="width:100%;" cellspacing="0" cellpadding="0">
	<tbody><tr>
    	<td valign="top" align="center">
        	<table style="width:950px;" cellspacing="0" cellpadding="0">
            	<tbody><tr><td style="width:950px; height:25px; background-image:url(Images/cabecera.png); background-repeat:no-repeat"></td></tr>
                <tr>
                	<td style="width:950px; height:25px; background-image:url(Images/cuerpo.png); background-repeat:repeat-y" valign="top" align="center">
                    	<table style="width:905px;" cellspacing="0" cellpadding="0">
                        	<tbody><tr>
                            	<td style="height:100px;" align="center">
                                	<table style="width:900px;" class="titulo_detalle1" cellspacing="0" cellpadding="0">
                                    	<tbody><tr>
                                        	 <td style="width:350px; height:100px;" align="center"><h1><a href="index.html" target="_self"  class="titulo_pagina">
                                            Plantilla</a></h1></td>
                                            <td style="width:550px;" valign="bottom" align="right"><a href="login.php">Login</a></td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr><td style="height:10px;"></td></tr>
                            <tr><td style="height:5px; background-color:#ba0000"></td></tr>
                            <tr>
                            	<td style="height:240px; width:905px;">
                                	<div id="slider">
                                        <ul id="sliderContent">         
                                                                                             
                                           <li class="sliderImage" style="display: none;">
                                                <img src="Images/a1.jpg" alt="Plantilla" style="border:0px; width:905px; height:240px;">
                                                <span class="bottom" style="padding-left: 10px; display: none;"><h3>Subtítulo primera imagen</h3></span>
                                           </li>
                                           <li class="sliderImage" style="display: list-item;">
                                                <img src="Images/a2.jpeg" alt="Plantilla" style="border:0px; width:905px; height:240px;">
                                                <span class="bottom" style="padding-left: 10px; display: block;"><h3>Subtítulo segunda imagen</h3></span>
                                           </li>


                                        <div class="clear sliderImage"></div> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr><td style="height:1px;"></td></tr>
                            <tr>
                            	<td style="height:60px; background-color:#ba0000" align="center">
                                	<table style="width:905px" cellspacing="0" cellpadding="0">
                                    	<tbody><tr>
                                        	<td align="center">
                                            	<table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                	<tbody>
                                                    
                                                    <tr>
                                                    	<td style="height:30px;" valign="middle" align="center"><h2><a href="index.html" target="_self" title="Home" class="menu">Página de inicio</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            	
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            <td align="center">
                                            	<table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                	
                                                   
                                                    <tr>
                                                    	<td style="height:30px;" valign="middle" align="center"><h2><a href="contacto.html" target="_self" title="Contacto" class="menu">Contacto</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr><td style="height:25px;"></td></tr>
                            <tr>
                            	<td valign="top" align="center">
                                	<table style="width:890px;" cellspacing="0" cellpadding="0">
                                    	<tbody><tr>
                                        	<td valign="top" align="left">
                                            	<table style="width:890px;" cellspacing="0" cellpadding="0">
                                                	<tbody><tr>
                                                    	<td style="width:10px;"></td>
                                                        <td style="width:5px; background-color:#ba0000; height:30px;"></td>
                                                        <td style="width:10px;"></td>
                                                        <td style="width:865px;" valign="bottom" align="left"><h2><a href="contacto.html" target="_self" title="Contacto" class="titulo">Contacto</a></h2></td>
                                                    </tr>
                                                	<tr><td style="height:5px;" colspan="4"></td></tr>
                                                    <tr><td style="height:1px; background-color:#ba0000" colspan="4"></td></tr>
                                                    <tr><td style="height:15px;" colspan="4"></td></tr>
                                                </tbody></table>
                                            </td>
                                         </tr>
                                         <tr>	
                                         	<td valign="top" align="left">
                                            	<table style="width:890px;" class="texto" cellspacing="0" cellpadding="0">  
                                                	<tbody><tr>
                                                    	<td style="width:300px;" valign="middle" align="right">
                                                        Plantilla<br><br>
                                                        Población. Wellington<br><br>
                                                        Provincia. Wellington<br><br>
                                                        Teléfono. 6********<br><br>
                                                        Email. <a href="mailto:********@gmail.com" class="texto">**********@gmail.com</a>
                                                        </td>
                                               	  		<td style="width:590px;" valign="top" align="right">
                                                        <div id="ver_mapa" style="width: 550px; height: 250px; border: 1px solid rgb(186, 0, 0); position: relative; overflow: hidden;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12632086.864293208!2d166.24523194789455!3d-39.37875042812368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d2c200e17779687%3A0xb1d618e2756a4733!2sNova+Zelanda!5e0!3m2!1sca!2ses!4v1523016678273" width="550" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></div>  
                                                        </td>
                                                    </tr>               
                                                                        
       		                                             
                                                </tbody></table>
                                            </td>                                            
                                        </tr>
										<tr>	
                                         	<td valign="top" align="left">
												<table style="width:890px;" class="texto" cellspacing="0" cellpadding="0">  
                                                	<tbody><tr>
                                                    	<td style="width:300px;" valign="middle" align="right">
                                                        
                                                        </td>
                                               	  		<td style="width:590px;" valign="top" align="right">
														<div id="enviado"></div>
                                                        <form id="formulario" name="formulario" method="post" action="contacto.php#enviado">
													<table border="0" style="width:550px; margin-top: 40px">
													<tr class="fila">
														<th colspan="2">
															
															<h3 align="left" style="font-size: 25px">Formulario de contacto</h3>
														</th>
													</tr>
													<tr>
														<th colspan="2">
															<p id="enviadoexito" style="display: none">Su mensaje se ha enviado con éxito!</p>
														</th>
													</tr>
													
													<tr class="fila">
														<td style="width:70px;">
															<label for="nombre">Nombre: </label>
														</td>
														<td>
															<input id="nombre" name="nombre" type="text" required><br>
														</td>
													</tr>
													<tr class="fila">
														<td>
															<label for="correo">Correo: </label>
														</td>
														<td>
															<input id="correo" name="correo" type="email" required><br>
														</td>
													</tr>
													<tr class="fila">
														<td>
															<label for="concepto">Concepto: </label>
														</td>
														<td>
															<input id="concepto" name="concepto" type="text" required><br>
														</td>
													</tr>
													<tr class="filaarea">
														<td>
															<label for="mensaje">Mensaje: </label>
														</td>
														<td>
															<textarea id="mensaje" name="mensaje" type="text" required></textarea><br>
														</td>
													</tr>
													<tr class="fila">
														<td colspan="2" align="left" valign="bottom">
															<a href="#enviado"><button id="enviar" name="enviar">Enviar</button></a>
															
														</td>
													</tr>
													</table>
<?php

if (isset ($_POST['enviar'])){
	//Variables iniciales
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$concepto = $_POST['concepto'];
$mensaje = $_POST['mensaje'];



//Conectamos a la base de datos
$db = mysqli_connect('localhost', 'root', '', 'Plantilla');
$sql = "INSERT INTO mensaje (`nombre`,`correo`,`concepto`, `mensaje`) VALUES('$nombre', '$correo','$concepto','$mensaje');";
$resultado = mysqli_query($db, $sql);
mysqli_close($db);														
													
?>
<script type="text/javascript">
	var enviado=document.getElementById("enviadoexito");
	enviado.setAttribute('style', 'display: block');
</script>
<?php } ?>
												</form>
												
                                                        </td>
                                                    </tr>               
                                                                        
       		                                             
                                                </tbody></table>
												

											</td>
										</tr>
					
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr><td style="height:25px;"></td></tr>
							
                            <tr>
                            	<td style="height:100px; background-color:#ba0000" align="center">
                                	<table style="width:900px;" class="menu1" cellspacing="0" cellpadding="0">
                                    	<tbody><tr><td style="height:10px;"></td></tr>
                                        <tr>
                                        	<td align="center">
                                            	<table cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                    	<td valign="middle" align="center"><h3><a href="index.html" target="_self" title="Home" class="menu1">Página de inicio</a></h3></td>
                                                        <td style="width:20px" align="center">|</td>
                                                    	<td valign="middle" align="center"><h3><a href="contacto.php" target="_self" title="Contacto" class="menu1">Contacto</a></h3></td>
                                                    </tr>
                                                </tbody></table>                                      
                                            </td>
                                        </tr>
                                    	
                                    	<tr><td style="height:20px;"></td></tr> 
                                        <tr>
                                        	<td align="center">
                                            Plantilla - Población. Wellington - Provincia. Wellington - Tel. 6********  - Email. <a href="mailto:*********@gmail.com" class="menu1">********@gmail.com</a>
                                            </td>
                                        </tr>
                                    	<tr><td style="height:10px;"></td></tr>                                  
                                    </tbody></table>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
            	<tr><td style="width:950px; height:25px; background-image:url(Images/pie.png); background-repeat:no-repeat"></td></tr>                
            </tbody></table>
        </td>
    </tr>
</tbody></table>



</body></html>

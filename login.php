<?php
 session_start();
 if (isset ($_POST['userid']) && isset($_POST['password']))
 {
     // Si el usuario acaba de intentar conectarse
     $userid = $_POST['userid'];
     $password = $_POST['password'];
     // Conectamos con la Base de Datos y comprobamos la identidad
     // del usuario
     $db = mysqli_connect('localhost', 'root', '', 'Plantilla');
     // El password se guarda cifrado con el método SHA1
     $password = sha1($password);
     
     $consulta = "SELECT user,ID FROM users where user = '$userid' and password = '$password'";
     $resultado = mysqli_query($db, $consulta);
     // Si existe u nregistro que cumple las condiciones, es que el
     // usuario ha proporcionado las credenciales correctas
     if (mysqli_num_rows ($resultado) > 0)
     {
        $fila = mysqli_fetch_row ($resultado);
         // Registramos el userid
        $_SESSION ['user']= $fila[0];
        $_SESSION['ID']=$fila[1];
        
        if($_SESSION['user']){
            header("Location: principal.php");
        }
        
        
    }
 }
?>
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
<title>Plantilla | Login</title>
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
                                            Transaina</a></h1></td>
                                            <td style="width:550px;" valign="bottom" align="right"><?php
 if (isset ($_SESSION['user'] ))
 {
    
     echo '<a href="logout.php">Logout</a>';
 }else{echo'<a href="login.php">Login</a>';} ?></td>
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
                                            
                                            <td align="center">
                                            	<table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                	
                                                   
                                                    <tr>
                                                    	<td style="height:30px;" valign="middle" align="center"><h2><a href="contacto.php" target="_self" title="Contacto" class="menu">Contacto</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr><td style="height:25px;"></td></tr>
                            
                            <tr><td><table style="width:900px;" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                        <td style="width:2px;"></td>
                                                        <td style="width:2px; background-color:#ba0000; height:30px;"></td>
                                                        <td style="width:5px;"></td>
                                                        <td style="width:270px;" valign="bottom" align="left"><h2><a href="login.html" target="_self" class="titulo" title="login">Página de entrada</a></h2></td>
                                                    </tr>
                                                    <tr><td style="height:5px;" colspan="4"></td></tr>
                                                    <tr><td style="height:1px; background-color:#ba0000" colspan="4"></td></tr>
                                                
                                                    <tr><td style="height:15px;" colspan="4"></td></tr>
                                                </tbody></table>   
<?php
 if (isset ($_SESSION['user'] ))
 {
     echo 'Ya estás logado como: ' . $_SESSION['user'] . '<br>';
     echo '<a href="principal.php">Ir a la página principal</a>';
 }
 else
 {
    if (isset ($userid))
     {
         // El usuario ha intentado conectarse y no lo ha conseguido
         echo '<p style="color: red; margin-left: 15px;">No has conseguido acceder al sistema</p><br>';
     }
     else
     {
         // Todavía no ha intentado autenticarse
         echo '<p style="margin-left: 15px;">No estás logado en el sistema<br></p>';
     }
     // Mostramos un formulario para que se conecten
?>
 <form method="POST" action="login.php" style="margin-left: 15px;">
 <table>
 <tr>
 <td>Usuario</td>
 <td><input type="text" name="userid"></td>
 </tr>
 <tr>
 <td>Contraseña</td>
 <td><input type="password" name="password"></td>
 </tr>
 <tr>
 <td colspan=2 align="left">
 <button id="enviar">Entrar</button>
 </td>
 </tr>
 </table>
 </form>
<?php
 }
?></td></tr>       
  <tr><td style="height:25px;"></td></tr>
</td></tr>
</script>
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
        </td>
    </tr>
</tbody></table>

</body></html>

<?php
 session_start();
 // Si no existe la variable de sesión, volvemos a login.php
 if (!isset ($_SESSION['user']))
 {
    header("Location:login.php");
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
<title>Plantilla | Mensajes</title>
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
                                            <td style="width:550px;" valign="bottom" align="right"><a href="logout.php">Logout</a></td>
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
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            <td align="center">
                                                <table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                    
                                                   
                                                    <tr>
                                                        <td style="height:30px;" valign="middle" align="center"><h2><a href="principal.php" target="_self" title="Mensajes" class="menu">Mensajes</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td> 
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                                
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            <td align="center">
                                                <table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                    
                                                   
                                                    <tr>
                                                        <td style="height:30px;" valign="middle" align="center"><h2><a href="contraseña.php" target="_self" title="Cambiar contraseña" class="menu">Cambiar contraseña</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td> 
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr><td style="height:25px;"></td></tr>
                            
                                        <tr>
                                <td valign="top">
<?php                             
 echo '<div style="margin-left: 15px; margin-bottom: 10px;"">Acceso restringido sólo a usuarios de la aplicación<br>';
 echo 'Ya estás logado como: ' . $_SESSION['user'].'</div><br>';
 //echo '<a href="logout.php">Logout</a></div>';
 ?>
<table style="width:890px;" cellspacing="0" cellpadding="0">
                                                    <tbody><tr>
                                                        <td style="width:10px;"></td>
                                                        <td style="width:5px; background-color:#ba0000; height:30px;"></td>
                                                        <td style="width:10px;"></td>
                                                        <td style="width:865px;" valign="bottom" align="left"><h2><a href="principal.php" target="_self" title="Mensajes" class="titulo">Mensajes</a></h2></td>
                                                    </tr>
                                                    <tr><td style="height:5px;" colspan="4"></td></tr>
                                                    <tr><td style="height:1px; background-color:#ba0000" colspan="4"></td></tr>
                                                    <tr><td style="height:15px;" colspan="4"></td></tr>
                                                </tbody></table>

<p style="margin-left: 15px;">Bienvenido a tu página personal. Aquí podrás ver todos los mensajes recibidos del formulario de contacto.</p>
<p style="margin-left: 15px;">Para borrar determinados mensajes, marca las casillas y después pulse sobre el botón borrar.</p>
<p style="margin-left: 15px;">Si quiere borrar todos los mensajes, pinche sobre el enlace de seleccionar todo y luego pulse el botón borrar.</p>
<p style="margin-left: 15px;">Si ve que el mensaje no se ha borrado, pulse las teclas Ctrl+R o F5 para refrescar la página o pulse sobre el enlace mensajes.</p>
<?php
 //Conectamos a la base de datos
 $db = mysqli_connect('localhost', 'root', '', 'Plantilla');
 //Realizamos la consulta de todos los mensajes
 $consulta = "SELECT ID, Date_format(fecha,'%d-%m-%Y %H:%i:%s') as fecha, nombre, correo, concepto, mensaje FROM mensaje ORDER BY fecha";
 $resultado = mysqli_query($db, $consulta);

 // Miramos si hemos obtenido alguna fila en el resultado.
if (mysqli_num_rows($resultado) > 0)
{
echo'<form name="form" method="get" action="">';
echo '<table id="mensajes" width="890px"  align="center" border="1" cellspacing="1">';
echo'<tr>';
echo'<td align="left" style="height:60px; background-color:#ba0000;" colspan="4">';
echo'<table style="width:905px" cellspacing="0" cellpadding="0">
                                        <tbody><tr>
                                            <td align="center">
                                                <table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                    
                                                    <tr>
                                                        <td style="height:30px;" valign="middle" align="center"><a class="menu" name="seltodos" href="javascript:todosCheck();" style="margin-right: 15px;">Seleccionar todos los mensajes</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                                
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td align="center">
                                                <table style="width:150px;" class="menu1" cellspacing="0" cellpadding="0">
                                                    
                                                   
                                                    <tbody><tr>
                                                        <td style="height:30px;" valign="middle" align="center"><h2><a class="menu" name="seltodos" href="javascript:todosUnCheck();" style="margin-right: 15px;">Deseleccionar todos los mensajes</a></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                            
                                            <td style="width:1px; height:60px; background-color:#fff"></td>
                                             <td align="center">
                                                <table style="width:150px;" cellspacing="0" cellpadding="0">
                                                    
                                                   
                                                    <tbody><tr>
                                                        <td style="height:30px;" valign="middle" align="center"><h2><button  name="borrar" id="borrar" class="menu" value="borrar">Borrar mensajes seleccionados</button></h2></td>
                                                    </tr>
                                                    
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>';
                                            
/*echo'<a name="seltodos" href="javascript:todosCheck();" style="margin-right: 15px;">Seleccionar todos los mensajes</a>';
echo'<a name="seltodos" href="javascript:todosUnCheck();" style="margin-right: 15px;">Deseleccionar todos los mensajes</a>';
echo'<button  name="borrar" id="borrar" value="borrar">Borrar mensajes seleccionados</button>';*/
echo'</td>';
echo'</form>';
echo'</tr>';
echo'<tr>';
echo'<td style="height:15px;" colspan="4"></td></tr>';
// Obtenemos la fila actual en un array asociativo y
// desplazamos el cursor a la siguiente fila
while ($fila = mysqli_fetch_assoc($resultado))
{
//LimpiaResultados($fila);

echo'<tr>';
    echo'<td>De: </td>';
    echo'<td width="440px">'.$fila['nombre'];
    if ($fila['correo'] != ''){
        echo ', '.$fila['correo'];
    }
    echo'</td>';
    echo'<td>'.$fila['fecha'].'</td>';
    echo'<td rowspan="3"><input type="checkbox" name="sel[]" value='.$fila['ID'].'>&nbsp;Marcar mensaje</td>';
echo'</tr>';
echo'<tr>';
    echo'<td>Concepto: </td>';
    echo'<td colspan="2">'.$fila['concepto'].'</td>';
echo'</tr>';
echo'<tr>';
    echo'<td>Mensaje: </td>';
    echo'<td colspan="2"><textarea style="width: 604px; height: 174px;" readonly>'.$fila['mensaje'].'</textarea></td>';
echo'</tr>';

echo'<tr style="height: 20px;">';
    echo'<td colspan="4"><hr color="gold"></td>';
echo'</tr>';

}

echo'</table>';
// Liberamos el resultado de la consulta.
mysqli_free_result($resultado);
// Cerramos la conexión a la base de datos.
mysqli_close($db);          


    
}
else{
    echo '<p style="margin-left: 15px;">No hay mensajes</p>';
}
//Cuando le damos a borrar mensaje
if(isset($_GET['borrar']) && (isset($_GET['sel']))){
    //Conectamos a la base de datos
    $db = mysqli_connect('localhost', 'root', '', 'Plantilla');
    $sels = $_GET["sel"];
    foreach ($sels as $indice => $valor) {
        //echo "$indice: $valor<br>";
        $sql="DELETE FROM mensaje WHERE ID=$valor";
        $resultado2 = mysqli_query($db, $sql);
        //Cerramos la conexión a la base de datos.
    }
    
    mysqli_close($db);          
}       
    
?>
</td></tr>
<script type="text/javascript">
    var seltodos = document.getElementsByName('seltodos')[0];
    
    function todosCheck(){
        for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=true;
    }
    function todosUnCheck(){
        for (i=0;i<document.form.elements.length;i++)
      if(document.form.elements[i].type == "checkbox")
         document.form.elements[i].checked=false;
    }
    //seltodos.addEventListener("click", todosCheck, false);
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

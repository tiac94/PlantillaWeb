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
<title>Plantilla | Página de inicio</title>
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
        nombre=document.getElementById("userid");
        password=document.getElementById("password");
        password2=document.getElementById("password2");
        password3=document.getElementById("password3");
        registroSubmit=document.getElementById("registro-submit");

        enviado=document.getElementById("enviadoexito");
        /*
        El evento input se producirá cada vez que se pulse una tecla
        */
        nombre.addEventListener("input", validacion, false);
        password.addEventListener("input", validacion, false);
        password2.addEventListener("input", validacion, false);
        password3.addEventListener("input", validacion, false);
        registroSubmit.addEventListener("click", enviar, false);
        
    }
    function validacion()
    {
        enviado.setAttribute('style', 'display: none');
        if(password2.value!==password3.value)
            password3.setCustomValidity('Las passwords deben coincidir');
        else
            password3.setCustomValidity('');
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
                            	<td valign="top" align="center">
                                	<table style="width:905px;" cellspacing="0" cellpadding="0">
                                    	<tbody><tr>
                                        	<td style="width:280px;" valign="top" align="center">
                                            	<table style="width:890px;" cellspacing="0" cellpadding="0">
                                                	<tbody><tr>
                                                    	<td style="width:2px;"></td>
                                                        <td style="width:2px; background-color:#ba0000; height:30px;"></td>
                                                        <td style="width:5px;"></td>
                                                        <td style="width:270px;" valign="bottom" align="left"><h2><a href="index.html" target="_self" class="titulo" title="Cambiar contraseña">Cambiar contraseña</a></h2></td>
                                                    </tr>
                                                	<tr><td style="height:5px;" colspan="4"></td></tr>
                                                    <tr><td style="height:1px; background-color:#ba0000" colspan="4"></td></tr>
                                                    <tr><td style="height:15px;" colspan="4"></td></tr>
                                                    <tr>
                                                    	<td colspan="4" class="texto">
                                                        <p id="enviadoexito" style="display: none; margin-left: 15px;">Su contraseña se ha cambiado con éxito!</p>
                                                        <form name="formulario" id="formulario" method="POST" action="" style="margin-left: 15px;">
                                                        
<?php //Conectamos a la base de datos
$db = mysqli_connect('localhost', 'root', '', 'Plantilla');

//hacemos la consulta para sacar el usuario de la variable de sesion ID
$consulta = "SELECT user FROM users where users.ID =".$_SESSION['ID'];

$resultado = mysqli_query($db, $consulta);
//sacamos el valor de user y lo ponemos en el campo de texto
if ($fila = mysqli_fetch_assoc($resultado))
{
    //Cuando pulsamos el boton cambiar contraseña
    if (isset ($_POST['enviar'])){

    //Variables iniciales
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $password3 = $_POST['password3'];
    $password = sha1($password);
    $password3 = sha1($password3);




    //comprobamos que la contraseña actual de la variable de sesion es la correcta
    $consulta = "SELECT password FROM users where users.ID ='".$_SESSION['ID']."' and password = '$password'";
    $resultado = mysqli_query($db, $consulta);
    //Si es correcta el numero de registros sera igual a 1
    if (mysqli_num_rows ($resultado) == 1){
        /*?>
        <script type="text/javascript">
        var enviado=document.getElementById("enviadoexito");
        enviado.setAttribute('style', 'display: block;');
        enviado.textContent="ACIERTO! Contraseña actual correcta."
        </script>
        <?php */
        $sql = "UPDATE users SET user = '$userid', password = '$password3' WHERE users.ID=".$_SESSION['ID'];
        $resultado = mysqli_query($db, $sql);
        ?>
        <script type="text/javascript">
        var user = document.getElementById("userid");
        document.getElementById("enviadoexito");
        var enviado=document.getElementById("enviadoexito");
        enviado.setAttribute('style', 'display: block; margin-left: 15px;');
        enviado.textContent="Contraseña cambiada!";
        </script>
        <?php 
        //Sino mostramos mensaje de error y el formulario
    }
    else{?> 
        <script type="text/javascript">
            var enviado=document.getElementById("enviadoexito");
            enviado.setAttribute('style', 'display: block; color: red; margin-left: 15px;');
            enviado.textContent="ERROR! Contraseña incorrecta."
        </script>
        <table>
 <tr>
 
 <td>Usuario</td>
 <td><input type="text" id="userid" name="userid" value=<?php echo $fila['user'] ?> required></td>
 </tr>
 
 <tr>
 <td>Introduzca contraseña actual</td>
 <td><input type="password" id="password" name="password"></td>
</tr>
<tr>
 <td>Introduzca nueva contraseña</td>
 <td><input type="password" id="password2" name="password2" required></td>
</tr>
<tr>
 <td>Repita contraseña</td>
 <td><input type="password" id="password3" name="password3" required></td>
</tr>
 <tr>
 <td colspan=2 align="left">
 <button id="enviar" name="enviar">Cambiar contraseña</button>
 </td>
 </tr>
 </table><?php
    }

 }

else{

    ?>

 <table>
 <tr>
 
 <td>Usuario</td>
 <td><input type="text" id="userid" name="userid" value=<?php echo $fila['user'] ?> required></td>
 </tr>
 
 <tr>
 <td>Introduzca contraseña actual</td>
 <td><input type="password" id="password" name="password"></td>
</tr>
<tr>
 <td>Introduzca nueva contraseña</td>
 <td><input type="password" id="password2" name="password2" required></td>
</tr>
<tr>
 <td>Repita contraseña</td>
 <td><input type="password" id="password3" name="password3" required></td>
</tr>
 <tr>
 <td colspan=2 align="left">
 <button id="enviar" name="enviar">Cambiar contraseña</button>
 </td>
 </tr>
 </table>
    
    <?php
}
//$resultado = mysqli_query($db, $sql);
mysqli_close($db);                                                      
                                                    
?>

<?php } ?>
 </form>      </td>
                                                    </tr>
                                                    
                                                    <tr><td style="height:15px;" colspan="4"></td></tr>
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
                </tr>
            	<tr><td style="width:950px; height:25px; background-image:url(Images/pie.png); background-repeat:no-repeat"></td></tr>                
            </tbody></table>
        </td>
    </tr>
</tbody></table>



</body></html>

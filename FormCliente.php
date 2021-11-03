<link rel="stylesheet" href="css/Stylos.css">
<div class="cliente">
    <h2>Registrate</h2>
    <p>¿Por que es importante registrate? Si te registras recibiras notificaciones sobre
    las ultimas novedades, asi como ofertas especiales para nuestros clientes mas frecuentes
    en la aplicacion. ¿Que esperas para registrarte?. <br><br>
    </p>
    <form method="post">
        <p>Nombre Completo</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
        <p>Contraseña</p>
        <input type="text" id="contra" name="contra" placeholder="Ingresa tu Contraseña">
        <p>Correo</p>
        <input type="email" name="correo" id="correo" placeholder="Ingresa tu correo">
        <input name="registrarse" type="submit" value="Registrarse" id="register">
        <br> <br>
    </form>
    <?php 
   
    if (isset($_POST["registrarse"])){

        $nombre = ($_POST["nombre"]);
        $contra = ($_POST["contra"]);
        $correo = ($_POST["correo"]);
       
        echo "Cuenta Registrada! Sus datos son los siguientes: <br>
         Correo Electronico: $correo <br>
         Nombre Completo: $nombre <br>
         Contraseña: $contra <br><br>";

      }
    
?>
    <h2>Ventajas de Registrarse</h2>
    <p>Sin duda una de las grandes ventajas de pertencer a esta gran familia se trata de las
     ofertas, nuestros clientes mas frecuentes recibiran ofertas de hasta un 50% de descuento
     en lentes, incluso despues de 1 mes de registro recibira un envio gratuito a cualquier parte
     del pais.   <br><br>
    </p>
</div>

<link rel="stylesheet" href="css/Stylos.css">
    <h2>Articulos Disponibles</h2>
    <p>Aqui podras seleccionar los lentes que mas se adapten a ti, disponemos de multiples
        opciones de personalizacion, asi como una multiple cantidad de lentes, solo debes completar 
        un corto formulario para adquirirlos<br><br>
    </p>


        <img class="prod" src="img/Aviator.jpg" alt="Optica"> <br>
        <h2> Lentes Aviator </h2>
        <p>Estos lente tienen integrado lo ultimo en tecnologia actual, dispone de un lente que es capaz
            de adaptarse de manera agradable a cualquier persona, ademas su estilo tan comodo prermite
            un mejor agarre y manejo. Completa el formulario para adquirirlos<br><br>
    </p>
        <div class="articulos">
    <form method="post">
        <p>Nombre Completo</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
        <p>Cantidad de Producto</p>
        <input type="text" id="can" name="can" placeholder="Ingresa la Cantidad">
        <p>Destino</p>
        <input type="text" name="des" id="des" placeholder="Ingresa el Destino">
        <input name="aviator" type="submit" value="Adquirir" id="adquirir">
        <br> <br>
    </form>
        </div>
        <?php 
   
   if (isset($_POST["aviator"])){

       $nombre = trim($_POST["nombre"]);
       $cantidad = trim($_POST["can"]);
       $destino = trim($_POST["des"]);
      
       echo "Producto Adquirido! Su Factura es la siguiente: <br>
        Nombre Completo: $nombre <br>
        Destino: $destino <br>
        Cantidad: $cantidad";

     }
   
?>
    
        <img class="prod" src="img/stone.jpeg" alt="Optica"> <br>
        <h2> Lentes Stone </h2>
        <p>Buscas algo inovador y unico, tenemos algo perfecto para ti, se trata de unos lentes realizados
            con una piedra especial muy comoda que destaca por su gran inovacion y su bonito
            refinado. Completa el formulario para recibirlos.<br><br>
    </p>
    <div class="articulos">
    <form method="post">
        <p>Nombre Completo</p>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
        <p>Cantidad de Producto</p>
        <input type="text" id="can" name="can" placeholder="Ingresa la Cantidad">
        <p>Destino</p>
        <input type="text" name="des" id="des" placeholder="Ingresa el Destino">
        <input name="stone" type="submit" value="Adquirir" id="adquirir">
        <br> <br>
    </form>
        </div>
        <?php 
   
   if (isset($_POST["stone"])){

       $nombre = trim($_POST["nombre"]);
       $cantidad = trim($_POST["can"]);
       $destino = trim($_POST["des"]);
      
       echo "Producto Adquirido! Su Factura es la siguiente: <br>
        Nombre Completo: $nombre <br>
        Destino: $destino <br>
        Cantidad: $cantidad";

     }
   
?>

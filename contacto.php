<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Café</title>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/styles.css" />
  </head>

  <body>
  <?php include_once "plantillas/header.php"?>

    <main class="contenedor">
        <h2 class="mayusculas centrar-texto">Contacto</h2>

        <div class="contacto-bg"></div>

        <form class="formulario">

            <div class="campo">
                 <label for="nombre" class="campo__label">Nombre</label>
                 <input type="text" placeholder="Tu Nombre" id="nombre" class="campo__field">
            </div>

             <div class="campo">
            <label for="correo" class="campo__label">E-Mail</label>
            <input type="email" placeholder="Tu Email" id="correo" class="campo__field">
             </div>


           <div class="campo">
            <label for="cuadro" class="campo__label">Mensaje</label>
            <textarea id="cuadro" class="campo__field"></textarea>
           </div>

           <div>
               <input type="submit" value="Enviar" class="boton boton--primario derecha">
           </div>

        </form>
        <!-- EL ACCTION ES UN LUGARQ UE DEFINES HACIA DONDE SE VAN A MANDAR LOS DATOS, COMO UN SERVIDOR -->
    </main>

    <?php include_once "plantillas/footer.php"?>
    <script src="/js/modernizer.js"></script>
  </body>
</html>

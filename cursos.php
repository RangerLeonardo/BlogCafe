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
      <h2 class="centrar-texto">Nuestros Próximos Cursos y Talleres</h2>



      <div class="curso">
        <!-- Aquí empieza el encapsulamiento -->
                  <div class="curso__imagen">
                        <img src="/img/curso1.jpg" alt="Imagen del curso">
                  </div>
                  
                  <div class="curso__informacion">
                    <h3 class="no-margin">Taller Para Tostar y Moler Granos</h3>
                    <p class="curso__label">Precio: <span class="curso__precio"> Gratis</span></p>
                    <p class="curso__label">Cupo: <span class="curso__precio"> 20</span></p>
                  
                    <p class="curso__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi mollitia eum maxime blanditiis? Itaque velit provident sit voluptate molestias, vel fugiat. Deserunt aperiam perspiciatis adipisci at magnam accusantium quis?</p>
                  </div>

                  <a href="entrada.php" class="boton boton--primario mayusculas menosMargin"
                            >Comprar</a>
        <!-- Aquí termina el encapsulamiento -->
            </div> 



    <div class="curso">
        <!-- Aquí empieza el encapsulamiento -->
                    <div class="curso__imagen">
                        <img src="/img/curso2.jpg" alt="Imagen del curso">
                  </div>
                  
                  <div class="curso__informacion">
                    <h3 class="no-margin">Técnicas de Extracción de Café</h3>
                    <p class="curso__label">Precio: <span class="curso__precio"> Gratis</span></p>
                    <p class="curso__label">Cupo: <span class="curso__precio"> 20</span></p>
                  
                    <p class="curso__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi mollitia eum maxime blanditiis? Itaque velit provident sit voluptate molestias, vel fugiat. Deserunt aperiam perspiciatis adipisci at magnam accusantium quis?</p>
                  </div>

                  <a href="entrada.php" class="boton boton--primario mayusculas menosMargin"
                            >Comprar</a>
        <!-- Aquí termina el encapsulamiento -->
            </div> 



            <div class="curso">
                <!-- Aquí empieza el encapsulamiento -->
                 <div class="curso__imagen">
                    <img src="/img/curso3.jpg" alt="Imagen del curso">
                 </div>
                          
                          <div class="curso__informacion">
                            <h3 class="no-margin">4 Recetas de Café Para Principiantes</h3>
                            <p class="curso__label">Precio: <span class="curso__precio"> Gratis</span></p>
                            <p class="curso__label">Cupo: <span class="curso__precio"> 20</span></p>

                            <p class="curso__descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi mollitia eum maxime blanditiis? Itaque velit provident sit voluptate molestias, vel fugiat. Deserunt aperiam perspiciatis adipisci at magnam accusantium quis?</p>
                          </div>
                          <a href="entrada.php" class="boton boton--primario mayusculas menosMargin"
                          >Comprar</a>
                <!-- Aquí termina el encapsulamiento -->
                    </div> 





    </main>

    <?php include_once "plantillas/footer.php"?>
    <script src="/js/modernizer.js"></script>
  </body>
</html>

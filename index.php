<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Café</title>
    <!-- DESCRIPCION DE MI SITIO PARA UN MEJOR SEO -->
    <meta name="description" content="Página WEB de café">

    <!-- PREFETCH -->
    <link rel="prefetch" href="nosotros.php" as="document">




    <!-- PRIMERA PARTE DEL PRELOAD -->
    <link rel="preload" href="/css/normalize.css" as="style">
    <link rel="stylesheet" href="/css/normalize.css" />

    <link rel="preload" href="/css/styles.css" as="style">
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swa"  crossorigin="crossorigin" as="font">
    <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet"
  />
    <!-- PARA CARGAR UNA IMAGEN ANTES -->
    <!-- <link rel="preload" href="img/blog2.jpg" as="image"> -->

  </head>

  <body>
    
  <?php include_once "plantillas/header.php"?>

    <div class="contenedor contenido-principal">
      <main class="blog">
        <h2>Nuestro Blog</h2>

        <article class="entrada">
          <div class="entrada__imagen">
            <picture>
                <source loading="lazy" src="/img/blog1.webp" type="image/webp"> 
                <img loading="lazy" src="/img/blog1.jpg" alt="Imagen blog"/>
            </picture>
          </div>
          <div class="entrada__contenido">
            <h3 class="no-margin">Tipos de granos de Café</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
              numquam recusandae maxime tenetur earum vero voluptatibus, saepe
              cum, vitae voluptate consequuntur laudantium harum voluptas ad
              explicabo nihil maiores totam. Sed!
            </p>
            <a href="entrada.php" class="boton boton--primario mayusculas"
              >Leer Entrada</a>
          </div>
        </article>



        <article class="entrada">
          <div class="entrada__imagen">
            <picture>
              <source loading="lazy" src="/img/blog2.webp" type="image/webp"> 
              <img loading="lazy" src="/img/blog2.jpg" alt="Imagen blog"/>
          </picture>
          </div>
          <div class="entrada__contenido">
            <h3 class="no-margin">3 Deliciosas Recetas de Café</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
              numquam recusandae maxime tenetur earum vero voluptatibus, saepe
              cum, vitae voluptate consequuntur laudantium harum voluptas ad
              explicabo nihil maiores totam. Sed!
            </p>
            <a href="entrada.php" class="boton boton--primario mayusculas"
              >Leer Entrada</a>
          </div>
        </article>


        <article class="entrada">
          <div class="entrada__imagen">
            <picture>
              <source loading="lazy" src="/img/blog3.webp" type="image/webp"> 
              <img loading="lazy" src="/img/blog3.jpg" alt="Imagen blog"/>
          </picture>
          </div>
          <div class="entrada__contenido">
            <h3 class="no-margin">Beneficios del Café</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
              numquam recusandae maxime tenetur earum vero voluptatibus, saepe
              cum, vitae voluptate consequuntur laudantium harum voluptas ad
              explicabo nihil maiores totam. Sed!
            </p>
            <a href="entrada.php" class="boton boton--primario mayusculas"
              >Leer Entrada</a>


          </div>
        </article>
      </main>





      <aside class="sidebar">
        <h3 class="titulo2">Nuestros Cursos y Talleres</h3>

            <ul class="cursos no-padding">
                <li class="widget--curso">
                    <h3 class="no-margin">Técnicas de Extracción de café</h3>
                    <p class="widget--curso__label">Precio: <span class="widget--curso__precio"> Gratis</span></p>
                    <p class="widget--curso__label">Cupo: <span class="widget--curso__precio"> 20</span></p>
                    <a href="cursos.php" class="boton boton--secundario mayusculas"
                    >Más información aquí</a>
                </li> 

                <li class="widget--curso">
                    <h3 class="no-margin">4 Recetas de Café Para Principiantes</h3>
                    <p class="widget--curso__label">Precio: <span class="widget--curso__precio"> Gratis</span></p>
                    <p class="widget--curso__label">Cupo: <span class="widget--curso__precio"> 20</span></p>
                    <a href="cursos.php " class="boton boton--secundario mayusculas"
                    >Más información aquí</a>
                </li> 

            </ul>




      </aside>
    </div>


    <?php include_once "plantillas/footer.php"?>

    <script src="/js/modernizer.js"></script>



  </body>
</html>

# Guía Rápida: Cómo Ejecutar el Proyecto BlogCafe

¡Hola! Esta guía ha sido diseñada para ayudarte a poner en marcha el proyecto **BlogCafe** en tu computadora de forma sencilla. No necesitas ser un experto para ejecutarlo ni tener un IDE.

---

## ⚠️ Requisito Importante: Tener PHP Instalado

Para que el proyecto BlogCafe funcione en tu computadora, es **indispensable** que tengas **PHP instalado**.

### ¿Cómo saber si ya tienes PHP?

1.  **Abrir el Símbolo del Sistema (CMD):**
    * Presiona la tecla `Windows` en tu teclado.
    * Escribe `cmd` en la barra de búsqueda y presiona `Enter`. Esto abrirá una ventana negra llamada "Símbolo del sistema".

2.  **Verificar la Versión de PHP:**
    * Dentro de la ventana del Símbolo del sistema, escribe el siguiente comando y presiona `Enter`:

    ```bash
    php -v
    ```

3.  **Interpretar el Resultado:**
    * **Si ves un mensaje que muestra la versión de PHP** (por ejemplo, "PHP 8.3.21 (cli)..."), ¡excelente! Ya tienes PHP instalado y puedes saltar a la siguiente sección.
    * **Si recibes el mensaje:** `"php" no se reconoce como un comando interno o externo, programa o archivo por lotes ejecutable.`, esto significa que no tienes PHP instalado o no está configurado correctamente. Por favor, sigue la guía de instalación de PHP antes de continuar con este proyecto:

        ➡️ **[Guía de Instalación de PHP en Windows](https://github.com/RangerLeonardo/Install-PHP)**

        Una vez que hayas instalado PHP y el comando `php -v` funcione, regresa a esta guía.

---

## 🚀 Pasos para Ejecutar el Proyecto BlogCafe

¡Excelente ya estamos listos para poner en marcha el BlogCafe!

### Paso 1: Descargar el Proyecto BlogCafe

1.  **Descargar el ZIP del Proyecto:**
    * En la página principal de este repositorio (donde estás ahora), busca un botón verde que dice **"Code"** (o "Código"). Haz clic en él.
    * En el menú que se despliega, haz clic en **"Download ZIP"** (o "Descargar ZIP").
    * Tu navegador descargará un archivo comprimido (ej. `BlogCafe-main.zip` o similar).

2.  **Descomprimir el Proyecto:**
    * Ve a tu carpeta de "Descargas" (o donde tu navegador guarde los archivos).
    * Encuentra el archivo `BlogCafe-main.zip` (o el nombre que tenga).
    * Haz clic derecho sobre él y selecciona **"Extraer todo..."** (o "Descomprimir" si usas otra herramienta).
    * Sigue las instrucciones en pantalla. Esto creará una nueva carpeta, probablemente llamada `BlogCafe-main` (o `BlogCafe`). Esta es la carpeta principal de tu proyecto.

### Ubicación Recomendada (Opcional pero útil):

Puedes mover la carpeta `BlogCafe-main` a un lugar de fácil acceso, por ejemplo, creando una carpeta llamada `Proyectos` en el escritorio y colocando `BlogCafe` dentro. Así la ruta de tu proyecto sería `C:\Users\Usuario\Desktop\Proyectos\BlogCafe`.

### Paso 2: Iniciar el Proyecto desde el Símbolo del Sistema

Ahora que tienes el proyecto en tu computadora, vamos a hacerlo funcionar.

1.  **Abrir el Símbolo del Sistema (CMD):**
    * Presiona la tecla `Windows` en tu teclado.
    * Escribe `cmd` en la barra de búsqueda y presiona `Enter`. Esto abrirá una ventana negra.

2.  **Navegar hacia la Carpeta del Proyecto BlogCafe:**
    * En la ventana del Símbolo del sistema (CMD), necesitas decirle dónde está tu proyecto **BlogCafe**.
    * Usa el comando `cd` (que significa "change directory" o "cambiar directorio") seguido de la ruta de tu proyecto, esta ruta la podrás encontrar donde dejaste la carpeta BlogCafe (si no recuerdas la ruta ve el siguiente tip).

    * **La forma más fácil de obtener la ruta:**
        * Abre el Explorador de Archivos y ve a la carpeta principal de tu proyecto **BlogCafe** (la que se creó al descomprimir, ej. `C:\Users\Usuario\Desktop\Proyectos\BlogCafe`).
        * Haz clic en la **barra de direcciones** en la parte superior del Explorador de Archivos (donde se ve la ruta completa, por ejemplo, `Este equipo > Disco local (C:) > Proyectos > BlogCafe-main`). La ruta se seleccionará.
        * Copia la ruta seleccionada (`Ctrl + C`).
        * En la ventana del CMD, escribe `cd ` (damos un **espacio** al final) y luego **pega la ruta** que copiaste (`Ctrl + V`). Presiona `Enter`.

    * **Ejemplo de cómo se vería en el CMD después de pegar la ruta:**
        ```bash
        cd C:\Proyectos\BlogCafe-main
        ```
        (Y luego presionas `Enter`).

3.  **Iniciar el Servidor Web del Proyecto:**
    * Una vez que el Símbolo del sistema esté posicionado en la carpeta de tu proyecto (verás la ruta de tu proyecto en la línea de comando), escribe el siguiente comando:

    ```bash
    php -S localhost:8000
    ```
    * Presiona `Enter`.
    * Si todo va bien, verás un mensaje en el CMD que dice algo como "Listening on http://localhost:8000". ¡Esto significa que el proyecto BlogCafe ya está funcionando en tu computadora!

### Paso 3: Acceder al Proyecto en tu Navegador

1.  **Abrir tu Navegador Web:** Abre tu navegador web favorito (Google Chrome, Mozilla Firefox, Microsoft Edge, etc.).
2.  **Escribir la Dirección:** En la barra de direcciones de tu navegador, escribe la siguiente URL y presiona `Enter`:

    ```
    http://localhost:8000
    ```
3.  **¡Listo!** Deberías ver la página principal del proyecto **BlogCafe** funcionando en tu navegador.

---

### Para Detener el Proyecto:

* Cuando hayas terminado de usar el proyecto BlogCafe, regresa a la ventana del Símbolo del sistema (CMD) donde iniciaste el servidor (la ventana que dice "Listening on...").
* Presiona las teclas `Ctrl` y `C` al mismo tiempo. Esto detendrá el servidor o solo **cierra la ventana**.

---

Si tienes alguna pregunta o encuentras algún problema que no puedas resolver, no dudes en consultar a la persona de TI o a quien te proporcionó el proyecto. ¡Disfruta explorando BlogCafe!
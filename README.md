## Creación de un Gestor de Proyectos
- Creamos una nueva base de datos:
CREATE DATABASE ...
CREATE USER ... IDENTIFIED BY...
UTF8_general_ci
- Descargamos el PHPGrid_Lite
- Dentro del archivo config.php metemos las credenciales creadas para la BBDD
<!-- - -->

 1. PHPGRID_DB_USERNAME — USUARIO
 2. PHPGRID_DB_PASSWORD — CONTRASEÑA
 3. PHPGRID_DB_NAME — NOMBRE BBDD

<!--  -->
- En PHPMyAdmin, habiendo descargado el archivo simple_pm_install.sql del ejercicio lo importamos para cargar todas las tablas de contenidos
<!--  -->
- Rellenamos los contenidos de la carpeta includes con head, menu y footer con sus correspondientes líneas de código dentro del repositorio: https://github.com/phpcontrols/phpgrid-project-management 
<!--  -->
- Creamos archivo tmp.php e incluimos contenido, al igual que hacemos con template.php
- Poco a poco vamos rellenando todas las carpetas 
- Surgió un problema con las rutas y daba error con el Grid. Modifiqué el nombre del archivo de descarga de 'phpGrid-Lite', eliminé '-Lite', dejó de dar errores y me permitió entrar a ver las tablas, funcionaba bien 
- Comprobación general de funcionamiento óptima.
<!--  -->
**Ya se puede utilizar y el tutorial ha salido con éxito!**
El siguiente paso que realizamos a mayores fue las modificaciones en los archivos de estilos, cambiando los colores de las tablas, personalizando la letra del índice inicial y el fondo, traduciendo alguna de las partes al española, las partes que están en inglés se podrían haber modificado desde PHPmyadmin modificando las tablas subidas. 
Igual que el color que estaba de base, me quedé con el azul, simplemente lo cambié todo a tonos más oscuros, para que las tablas destacasen más. 
<!--  -->
A continuación se muestra como se ve el proyecto una vez acabado:
<!--  -->
![image](https://user-images.githubusercontent.com/91055754/150144258-a0955fdc-9b88-4fb3-b6e0-aa42c0d0da19.png)
![image](https://user-images.githubusercontent.com/91055754/150144335-17133023-c879-441d-bed7-7839bd47ea4a.png)
![image](https://user-images.githubusercontent.com/91055754/150290259-f978c338-cb8b-43e7-b802-d17709ea80ce.png)
![image](https://user-images.githubusercontent.com/91055754/150144467-2783ae21-e322-4ba4-8e04-17e4edae9192.png)

## Creación de un Project-management
- Creamos una nueva base de datos:
CREATE DATABASE ...
CREATE USER ... IDENTIFIED BY...
UTF8_general_ci
- Descargamos el PHPGrid_Lite
- Dentro del archivo config.php metemos las credenciales creadas para la BBDD
<!-- - -->
PHPGRID_DB_USERNAME — USUARIO
PHPGRID_DB_PASSWORD — CONTRASEÑA
PHPGRID_DB_NAME — NOMBRE BBDD
<!--  -->
- En PHPMyAdmin, habiendo descargado el archivo simple_pm_install.sql del ejercicio lo importamos para cargar todas las tablas de contenidos
<!--  -->
- Rellenamos los contenidos de la carpeta includes con head, menu y footer con sus correspondientes líneas de código dentro del repositorio: https://github.com/phpcontrols/phpgrid-project-management 
<!--  -->
- Creamos archivo tmp.php e incluimos contenido, al igual que hacemos con template.php
- Poco a poco vamos rellenando todas las carpetas 
- Surgió un problema con las rutas y daba error con el Grid. Modifiqué el nombre del archivo de descarga de 'phpGrid-Lite', eliminé '-Lite', dejó de dar errores y me permitió entrar a ver las tablas, funcionaba bien 
- Comprobación general de funcionamiento óptima.
Ya se puede utilizar y el tutorial ha salido con éxito!

![image](https://user-images.githubusercontent.com/91055754/150100957-24e0eaf7-5e7f-4f72-b2f2-8c24eab0063d.png)
![image](https://user-images.githubusercontent.com/91055754/150101019-7053e2b5-ef3c-4e10-88b6-6f393ca659ba.png)
![image](https://user-images.githubusercontent.com/91055754/150101103-e086f6e8-0d23-41b1-84ba-997f1e0eb7a5.png)
![image](https://user-images.githubusercontent.com/91055754/150101163-e5aada53-43eb-4837-8d3c-3f2474328829.png)

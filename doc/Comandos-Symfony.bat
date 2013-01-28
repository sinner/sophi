REM Este comando funciona para descargar una versión de Symfony2 (2.1.3) y crear un proyecto con el framework. Descarga todos los vendors preconfigurados.
composer create-project symfony/framework-standar-edition myproject/ 2.1.3

REM Este comando permite generar un nuevo bundle dentro del proyecto symfony2
php app/console generate:bundle --namespace=Symblogger/BlogBundle --format=yml

REM Este comando permite que la función assets vincule correctamente los recursos
php app/console assets:install web

REM comando que permite limpiar la caché
php app/console cache:clear

REM 1.- Mapea la BD en un archivo yml
php app/console doctrine:mapping:convert yml ./src/Symblogger/BlogBundle/Resources/config/doctrine/metadata/orm --from-database --force

REM 2.- Una vez generado el archivo yml de mapeo a la BD este comando permite generar las entidades(entities) correspondientes
php app/console doctrine:mapping:import SymbloggerBlogBundle annotation

REM 3.- Este permite generar los getters y setters de las entidades
php app/console doctrine:generate:entities SymbloggerBlogBundle

REM Esta tarea sólo crea la base de datos, esta no crea las tablas dentro de la base de datos. Si existe una base de datos con el mismo nombre, la tarea generará un error y la base de datos existente quedará intacta.
php app/console doctrine:database:create

REM Para crear las tablas en nuestra base de datos, puedes ejecutar la siguiente tarea de Doctrine.
php app/console doctrine:schema:create

REM Permite hacer carga de Datafixtures cuyos archivos de accesorios deben estar ubicados en el directorio DataFixtures/ORM/ dentro del bundle
php app/console doctrine:fixtures:load

REM **********-----COMANDOS DE GIT-----*************
REM Conocer que archivos se han modificado localmente
git status

REM Añadir todos los archivos nuevos al repositorio
git add .

REM Añadir al repositorio un archivo que todavía no existe
git add <nombre_del_nuevo_archivo> 

REM Macar uno o más archivos como listos para subir
git commit <archivo1> <archivo2>...

REM Marcar todos los archivos con cambios como listos para subir
git commit -a (Se abre el editor de texto por defecto para escribir el mensaje del commit)

REM Especificar un mensaje corto de commit directamente
git commit -m "Mensaje"

REM Subir los cambios al repositorio local, es decir para enviar al servidor todos los commits locales
git push

REM Actualizar el proyecto local con los posibles cambios producidos con el repositorio remoto
git pull

REM Volver a la pantalla principal
git checkout master

REM Subir los cambios al repositorio remoto
git push origin master 	



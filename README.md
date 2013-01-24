Sophi
=====

Sophi es una aplicacion la cual quede debiendo en el concurso de Symfony2 Sprint Mucho+Symfony. A continuacion el briefing de la aplicacion:

Menús de Comidas
================

La idea es agregar todo lo necesario en una aplicación para la correcta planificación de un menú con recetas para desayunos, comidas, meriendas y cenas y obtención de la lista de la compra resultante.

El objetivo funcional es facilitar la tarea al usuario que cocina para que de una forma sencilla sepa qué va a cocinar y planifique un calendario de comidas. De esta forma también ahorrará porque al saber qué va a cocinar no comprará materias primas que no va a utilizar*.

A continuación ponemos algunas de las características que el equipo de muchomasfacil.com valora como más útiles, no siendo ni mucho menos las únicas:

    Creación de menús específicos: niños, familia, según época del año, celíacos, dieta Dukan, dieta de la alcachofa, dieta blanda, ...
    Información de recetas, ingredientes y pesos, paso a paso de elaboración, datos nutricionales, ...
    Generación automática de listas de la compra según recetas y menús seleccionados
    Posibilidad por parte del usuario final de personalizar/añadir/compartir/valorar los menús y recetas
    Integración con Google Calendar y/o calendario de Apple
    Compartir el contenido con social media: Twitter y Facebook

* Según el Banco de Alimentos, los españoles tiramos anualmente a la basura 9 millones de toneladas de alimentos en buen estado. La industria alimentaria desecha 40 %, los restaurantes tiran un 14% a los contenedores, los supermercados un 5 % y los hogares un 41%.

Nueve millones de toneladas de alimentos se tiran cada año a la basura en España (Fuente cadenaser.com) http://goo.gl/P4CBu

Cómo usarlo
===========

1.- Se debe crear el archivo parameters.yml, por ejemplo utilizando SQLite:

    parameters:
        database_driver: sqlite
        database_host: localhost
        database_port: null
        database_name: sophi
        database_user: null
        database_password: 
        mailer_transport: smtp
        mailer_host: localhost
        mailer_user: null
        mailer_password: null
        locale: es
        secret: 42c910103a3d5221ccbd110855578d2122
        database_path: %kernel.root_dir%/database/sophi.sqlite
        
2.- Creamos el archivo que supondrá nuestra base de datos.

2.1- Luego de esto Creamos el Directorio "database/" dentro del directorio "app/" del sitio Symfony2.

2.2.- Creamos el archivo "sophi.sqlite" dentro del directorio "app/database/".

3.- Para obtener todos los vendors de Symfony y otros Bundles que estoy utilizando, Ejecutamos el milagroso:

    composer update

4.- Luego creamos nuestra base de datos, ejecutando:

    php app/console doctrine:schema:update

5.- Ingresamos a la url de registro de usuarios y creamos un usuario:
    
    http://localhost/sophi/register

    <?php
    
        $bella = new Jhuly();
        $bella->darleUnBeeeeeesoRiquisimo();
        $bella->verSuSonrisa();
        $bella->verlaSiendoTercaComoSiempre();
    
    ?>

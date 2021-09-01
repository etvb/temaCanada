<?php
    
    //Creamos las funciones que van a cargar nuestras hojas de estilos y archivos js
    function theme_scripts() {
        wp_enqueue_style('normaliza', get_template_directory_uri() . '/css/normalize.css' );
    }

    //ejecutamos la funcion
    add_action('wp_enqueue_scripts', 'theme_scripts');


?>
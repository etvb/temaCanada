<?php
    
    //Creamos las funciones que van a cargar nuestras hojas de estilos y archivos js
    function theme_scripts() {
        wp_enqueue_style('normaliza', get_template_directory_uri() . '/css/normalize.css' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }

    //ejecutamos la funcion
    add_action('wp_enqueue_scripts', 'theme_scripts');

    //agregamos el menu
    register_nav_menus(array(
        //culquier nombre => (como se vera en el apartado de menus,"Dónde se verá", nombre del tem)
        'menu_principal' => __('Menu Principal', 'Tema-canada')
    ));

    // agregar una imagen destaca

    add_theme_support ('post-thumbnails');
    add_image_size('destacada', 1100, 418, true);
    

    add_filter('show_admin_bar','__return_false');


?>
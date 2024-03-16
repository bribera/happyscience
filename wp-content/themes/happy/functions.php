<?php 

function happy_supports() {
    add_theme_support('title-tag'); //Function pour afficher le titre de la page dans l'onglet
    add_theme_support('post-thumbnails'); //Function pour permettre de mettre une image de couverture sur un post
    add_theme_support( 'menus' );
    register_nav_menu( 'header', 'Header Menu | Main Navigation' );
}
function happy_primary_menu_class( $classes, $items, $args ) {
    // Only affect the menu placed in the 'secondary' wp_nav_bar() theme location
    if ( 'header' === $args->theme_location ) {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'our-li-class nav-item hover:bg-[#d6ad60] hover:text-center hover:w-full lg:hover:w-auto lg:hover:bg-transparent ';
     }
    return $classes;
}

// ajout d'une classe à a
function happy_menu_link_class( $attrs ) {
    $attrs['class'] = 'block lg:inline-block xl:text-[26px] lg:mt-0 py-5 border-b-white-500 border-b-2 w-full lg:w-auto lg:pr-6 text-[18px] lg:border-none md:text-[17px] lg:text-[18px]';

    return $attrs;
}

 
function custom_excerpt( $text, $length ) {
    $excerpt  = preg_replace( " ([.*?])", '', $text );
    $excerpt  = strip_shortcodes( $text );
    $excerpt  = strip_tags( $excerpt );
    $ellipsis = strlen( $excerpt ) > $length ? '...' : '';
    $excerpt  = mb_strimwidth( $excerpt, 0, $length, $ellipsis );

    return $excerpt;
}

function happy_register_assets() {
    wp_register_style('styles', get_theme_file_uri('assets/css/main.css'), [
        'awesome',
        'swiperjs',
        'output',
    ]);
   //  wp_register_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', false)
    wp_register_style('output', get_theme_file_uri("assets/dist/output.css"),[], false);
    // wp_register_style('awesome', get_theme_file_uri('assets/fonts/fontawesome-webfont.woff2'),[], false);
    wp_register_style('awesome', "https://fonts.cdnfonts.com/css/itc-caslon-224-std",[], false);
    wp_register_style('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', [], false);
    wp_register_style('materiel icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], false);

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false);
    wp_register_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', [], false);
    wp_register_script('tailwind', "https://cdn.tailwindcss.com", [], false);
    wp_register_script('iconawesome', "https://kit.fontawesome.com/8d66d7b2da.js", [], false);
    wp_register_script('ionicon', "https://cdnjs.cloudflare.com/ajax/libs/ionicons/7.2.2/ionicons.min.js", [], false);
    wp_register_script('script', get_theme_file_uri('assets/js/script.js'), [
        'jquery',
        'swiperjs',
        'tailwind',
        'iconawesome',
        'ionicon',
    ]);
    wp_enqueue_style('styles');
    wp_enqueue_script('script');
}

function formation_init(){
    // Events
    //declare custom post types, and taxonomies
    $labels = [
//         Le nom au pluriel
        'name'                => _x( 'Events', 'Post Type General Name'),
//         Le nom au singulier
        'singular_name'       => _x( 'Event', 'Post Type Singular Name'),
//         Le libellé affiché dans le menu
        'menu_name'           => __( 'Events'),
//         Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les Events'),
        'view_item'           => __( 'Voir les Events'),
        'add_new_item'        => __( 'Ajouter une nouvelle Events'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer la Event'),
        'update_item'         => __( 'Modifier la Event'),
        'search_items'        => __( 'Rechercher une Event'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée'),
    ];
    $args= [
        'label' => 'Event',
        'labels' => $labels,
        'public' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
        'has_archive' => true,
    ];
    register_post_type('events', $args);
    // Formations
    //declare custom post types, and taxonomies
    $labels = [
    //         Le nom au pluriel
    'name' => _x( 'Formations', 'Post Type General Name'),
    //         Le nom au singulier
    'singular_name'  => _x( 'Formation', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name' => __( 'Formations'),
    //         Les différents libellés de l'administration
    'all_items'           => __( 'Toutes les Formations'),
    'view_item'           => __( 'Voir les Formations'),
    'add_new_item'        => __( 'Ajouter une nouvelle Formation'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la Formation'),
    'update_item'         => __( 'Modifier la Formation'),
    'search_items'        => __( 'Rechercher une Formation'),
    'not_found'           => __( 'Non trouvée'),
    'not_found_in_trash'  => __( 'Non trouvée'),
    ];
    $args= [
    'label' => 'Formation',
    'labels' => $labels,
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    'show_in_rest' => true,
    'has_archive' => true,
    ];
    register_post_type('Formation', $args);
    // équipes
    $labels = [
    //         Le nom au pluriel
    'name' => _x( 'Equipes', 'Post Type General Name'),
    //         Le nom au singulier
    'singular_name'  => _x( 'Equipe', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name' => __( 'Equipe'),
    //         Les différents libellés de l'administration
    'all_items'           => __( 'Toutes les Equipes'),
    'view_item'           => __( 'Voir les Equipes'),
    'add_new_item'        => __( 'Ajouter une nouvelle Equipes'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la Equipe'),
    'update_item'         => __( 'Modifier la Equipe'),
    'search_items'        => __( 'Rechercher une Equipes'),
    'not_found'           => __( 'Non trouvée'),
    'not_found_in_trash'  => __( 'Non trouvée'),
    ];
    $args= [
    'label' => 'Equipe',
    'labels' => $labels,
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-welcome-learn-more',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    'show_in_rest' => true,
    'has_archive' => true,
    ];
    register_post_type('equipes', $args);

                        // taxonimes events

    // On déclare ici les différentes dénominations de notre taxonomie de Event qui seront affichées et utilisées dans l'administration de WordPress
    $labels_categ_event = array(
        'name'              			=> _x( 'Catégories De Events', 'taxonomy general name'),
        'singular_name'     			=> _x( 'Catégorie De Events', 'taxonomy singular name'),
        'search_items'      			=> __( 'Chercher une Catégorie De Events'),
        'all_items'        				=> __( 'Toutes les Catégories De Events'),
        'edit_item'         			=> __( 'Editer la Catégorie De Events'),
        'update_item'       			=> __( 'Mettre à jour la Catégorie De Events'),
        'add_new_item'     				=> __( 'Ajouter une nouvelle Catégorie De Events'),
        'new_item_name'     			=> __( 'Valeur de la Catégorie De Events'),
        'separate_items_with_commas'	=> __( 'Séparer les réalisateurs avec une virgule'),
        'menu_name'         => __( 'Catégories De Events'),
    );

    $args_categ_event = array(
        // Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
        'hierarchical'      => true,
        'labels'            => $labels_categ_event,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'catégories' ),
    );

    register_taxonomy( 'categ_events', 'events', $args_categ_event );

                        // taxonomies formations

    $labels_categ_formation = array(
        'name'              			=> _x( 'Catégories De Formation', 'taxonomy general name'),
        'singular_name'     			=> _x( 'Catégorie De Formation', 'taxonomy singular name'),
        'search_items'      			=> __( 'Chercher une Catégorie De Formation'),
        'all_items'        				=> __( 'Toutes les Catégories De Formation'),
        'edit_item'         			=> __( 'Editer la Catégorie De Formation'),
        'update_item'       			=> __( 'Mettre à jour la Catégorie De Formation'),
        'add_new_item'     				=> __( 'Ajouter une nouvelle Catégorie De Formation'),
        'new_item_name'     			=> __( 'Valeur de la Catégorie De Formation'),
        'separate_items_with_commas'	=> __( 'Séparer les réalisateurs avec une virgule'),
        'menu_name'         => __( 'Catégories De Formation'),
    );

    $args_categ_formation = array(
        // Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
        'hierarchical'      => true,
        'labels'            => $labels_categ_formation,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'catégories' ),
    );

    register_taxonomy( 'categ_formation', 'formation', $args_categ_formation );

    // taxonomie article
    $labels_categ_article = array(
        'name'              			=> _x( 'Catégories De Articles', 'taxonomy general name'),
        'singular_name'     			=> _x( 'Catégorie De Articles', 'taxonomy singular name'),
        'search_items'      			=> __( 'Chercher une Catégorie De Articles'),
        'all_items'        				=> __( 'Toutes les Catégories De Articles'),
        'edit_item'         			=> __( 'Editer la Catégorie De Articles'),
        'update_item'       			=> __( 'Mettre à jour la Catégorie De Articles'),
        'add_new_item'     				=> __( 'Ajouter une nouvelle Catégorie De Articles'),
        'new_item_name'     			=> __( 'Valeur de la Catégorie De Articles'),
        'separate_items_with_commas'	=> __( 'Séparer les réalisateurs avec une virgule'),
        'menu_name'         => __( 'Catégories De Articles'),
    );

    $args_categ_article = array(
        // Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
        'hierarchical'      => true,
        'labels'            => $labels_categ_article,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'catégories' ),
    );

    register_taxonomy( 'categ_article', 'article', $args_categ_article );
    
}



add_action('init', 'formation_init'); //call de la function formation_init


add_filter( 'nav_menu_link_attributes', 'happy_menu_link_class' ); // call de la function formation_menu_link_class

add_filter( 'nav_menu_css_class', 'happy_primary_menu_class', 10, 3 ); // call de la function formation_primary_menu_class

add_action('wp_enqueue_scripts', 'happy_register_assets'); // call de la function formation_register_assets
    
add_action('after_setup_theme', 'happy_supports'); // call de la function formation_supports

?>
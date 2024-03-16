
<?php


//
function word_Add_My_Admin_Link() {
	add_menu_page(
		'Search', // Title of the page
		'Search', // Text to show on the menu link
		'manage_options', // Capability requirement to see the link
		'includes/po-administration.php' // The 'slug' - file to display when clicking the link
	);
}
add_action( 'admin_menu', 'word_Add_My_Admin_Link' );

function custom_search_form() {
	$form = '<form role="search" method="get" id="searchform" name="searchform" class="searchform" action="' . home_url( '/' ) . '" >
                <div class="search-input for-menu-header flex gap-x-1">
                    <label class="screen-reader-text w-full bg-slate-500 text-white" for="s">' . __( 'Search' ) . '</label>
                    <input placeholder="Recherchez" class="menu-input-search pb-3 focus:outline-none xl:text-[24px] bg-[#5c5c77] border-none outline-none text-white pl-2   px-4 py-2" type="search" value="' . get_search_query() . '" name="s" id="s" />
                    
                </div>	
            </form>
            <div class="results bg-slate-500 text-white shadow-sm">
                <div class="ajax-box">
                    <div id="ajax-search-results" class="bg-slate-200 absolute shadow-sm shadow-slate-300 rounded-bl-[10px] text-white rounded-br-[10px] "></div>
                </div>
            </div>';
	return $form;
}

/*Fonction Recherche du formulaire du menu*/
function custom_search_query( $query ) {
	if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
		/*Retrieve data from the form*/
		if (isset($_GET['searchform']) || isset($_GET['searchsubmit']))
		{
			$post_type = ( ! empty( $_GET['post_type'] ) ) ? $_GET['post_type'] : '';
			$search_term = ( ! empty( $_GET['s'] ) ) ? $_GET['s'] : '';

			$args = array(
				's' => $search_term,
				'post_type' => array( 'any'),
				'order'=> 'DESC',
				'post_status' => 'publish',
				'posts_per_page'=> 6
			);

			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {?>
                 <?php get_header(); ?>
                <main class="">
					
					<?php $post_count = 0;
					while ( $query->have_posts() ) {
						$query->the_post();
						$post_count++;?>
                        <article  id="<?php echo the_ID(); ?>" class="">
                            <h3 class=""><?php echo get_the_title(); ?></h3>
                        </article>
					<?php }?>
                    <div class="row" style="justify-content:center;">
                        <div class="load-btn">
							<?php if ($post_count > 1): ?>
                                <button id="load-more" class="load-more"  type="button" name="button">Read more<i class="fas fa-arrow-right margin-l-2"></i>
                                </button>
							<?php endif;?>
                        </div>
                    </div>
                </main> <?php
				get_footer();
			}
			else {
				get_header();
				echo'<main class="actualites">
                        <section>';
				echo '<div style="padding: 18px 0 18px 0; font-size: 18px;">Sorry, but nothing matches your search terms.</div>';
				echo'</section>
                        </main>';
				get_footer();
			}
			wp_reset_postdata();
			die();
		}
	}
}

add_shortcode( 'custom_search_form', 'custom_search_form' );
add_filter( 'pre_get_posts', 'custom_search_query' );

/*fonction ajax du formulaire du menu*/
function ajax_search() {
	$query = $_REQUEST['query'];
	$args = array(
		's' => $query,
		'post_status' => 'publish',
		'post_type' => 'any',
		'posts_per_page' => 3,
	);
	$search = new WP_Query( $args );
	if ( $search->have_posts() ) {?>
        <div style="padding: 8px; font-size: 14px; font-weight: 400;" id="count-post"><?php echo $search->found_posts; ?> Results</div
		<?php while ( $search->have_posts() ) {
			$search->the_post(); 
         ?>
            <article id="<?php echo the_ID(); ?>" class="">
                <h3 class="text-white"><a href="<?php the_permalink();?>" class=""><?php echo get_the_title(); ?></a></h3>
            </article>
		<?php }
	} else {
		echo '<div></div><div style="padding: 8px;">Sorry, but nothing matches your search terms.</div><div></div>';
	}
	wp_reset_postdata();
	die();
}

/*AJax queries*/
add_action( 'wp_ajax_ajax_search', 'ajax_search' );
add_action( 'wp_ajax_nopriv_ajax_search', 'ajax_search' );

function enqueue_scripts() {
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', '1.0', true );
	wp_enqueue_script( 'ajax-search', plugin_dir_url( __FILE__ ) . '/assets/js/ajax-search.js', array( 'jquery' ), '1.0', true );

	wp_localize_script( 'ajax-search', 'ajax_search_params', array(
		'ajax_url' => admin_url( 'admin-ajax.php' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function enqueue_styles() {
//	wp_enqueue_style( 'autres-style', plugin_dir_url( __FILE__ ) . '/assets/css/style.css', array(), '2023-02-16', 'all' );
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

?>


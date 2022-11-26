<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">



	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

	

					<?php
					    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
						$url = "https://";   
				   else  
						$url = "http://";   
				   // Append the host(domain name, ip) to the URL.   
				   $url.= $_SERVER['HTTP_HOST'];   
				   
				   // Append the requested resource location to the URL   
				   $url.= $_SERVER['REQUEST_URI'];    
					 
				  // echo $url;
				   
				   $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
				   $uriSegments = substr($uriSegments[2], 0, 5);
				   //echo $uriSegments;


					echo FrmViewsDisplaysController::get_shortcode( array( 'id' => 4274, 'filter' => 'limited', 'entry' => $uriSegments) );
					?>
					<div class="tag-cloud-by-category">
						<?php 
						$category = get_category( get_query_var( 'cat' ) );
						$cat_id = $category->cat_ID;
						if ($cat_id !=null){
						echo tag_cloud_by_category($cat_id); 
            //echo $cat_id;   
						}
						?>
					</div>

					<div class="posts-by-category" style="
    width: 75%;
    float: right;
">
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
				</div>

			</main><!-- #main -->

			<?php
			// Display the pagination component.
			understrap_pagination();
			// Do the right sidebar check.
			get_template_part( 'global-templates/right-sidebar-check' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();

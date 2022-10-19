<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">


			<?php   
$category_detail=get_the_category();//$post->ID
foreach($category_detail as $cd){
$parent_id = substr($cd->slug, 0, strpos($cd->slug, '-'));

//echo do_shortcode(' [frm-field-value field_id=360 entry='.$parent_id.']');  
  
echo "<b>Practice:</b>".do_shortcode(' [frm-field-value field_id=360 entry='.$parent_id.']')." <a class='btn btn-primary' href='/?entry=".$parent_id."&parent_id=".$parent_id."' role='button'>Go</a><br><br>";
}
//$just_name = substr ($cd->slug, strrpos( $cd->slug, '-' ) + 1 );
$just_name = str_replace($parent_id,"",$cd->slug);
        
        //echo ($just_name);        
$updated = wp_insert_category( [
	'cat_ID' => 16,
	'cat_name' => 'New name'
] );        
        
        
        
?>

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
					understrap_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						//comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();

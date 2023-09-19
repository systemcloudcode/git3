<?php
/**
 * Template Name: Page Secured
 *
 * Members area pages, _s-right-sidebarpage.php with left instead of right line 44, add user check lines 16-20 and 62-65
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );


/** user check **/
//include 'user-check.php';
if ( $user_ID ) : // if logged in
	//if ( array_intersect($allowed_roles, $user->roles )  ) :  // check role for expired
	/** user check **/

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();

/** user check **/
//else : include 'login-expired.php'; endif; // check role for expired
//else : include 'login.php'; endif; // if logged in
else : include 'login.php'; 
endif; // if logged in


/** user check **/

?>
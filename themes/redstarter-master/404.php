404

<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main flex direction-row" role="main">

			<section class="error-404 not-found split_page">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

<!-- recent posts -->

<h2>RECENT POSTS</h2>

<?php
function frl_get_requested_slug(){
  global $wp;
  $q = $wp->request;
  $q = preg_replace("/(\.*)(html|htm|php|asp|aspx)$/","",$q);
  $parts = explode('/', $q);
  $q = end($parts);
  return $q;
}

function frl_list_posts($posts){
  if(empty($posts))
  return '';
  $list = array();
  foreach($posts as $cpost) {
    $title = apply_filters('the_title', $cpost->post_title);
    $url = get_permalink($cpost);
    $list[] = "<li><a href='{$url}'>{$title}</a></li>"; 
  }
  return implode('', $list);
}		
		
?>


<?php 
$q = frl_get_requested_slug();
$args = array(
  'post_type' => 'journal',
  'post_status' => 'publish',
  'name' => $q,
  'posts_per_page' => 5
);
$query = new WP_Query($args); //query posts by slug

?>
<?php 
$query->query($args);
if(!empty($query->posts)):
  ?>
  <ul class="posts-list">
  <?php echo frl_list_posts($query->posts);?>
  </ul>
<?php endif;?>

<!-- end recent posts -->

					<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						$archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		<div>
			<?php get_sidebar(); ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

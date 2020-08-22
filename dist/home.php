<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main posts-page" id="main">
                <div class="card-deck">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<article class="card mb-3" id="post-<?php the_ID(); ?>">
					<?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink();?>" class="card-img-top">
                        <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?> featured image">    
						</a>
						<?php endif ;?>
                        <div class="card-body">
                        <h1 class="entry-title card-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
							<div class="entry-content">

								<?php
								wp_trim_words(the_excerpt(), 20); ?>

							</div><!-- .entry-content -->
						</div>
						<footer class="entry-footer card-footer p-0">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary w-100 text-white rounded-0 p-3">Read More</a>
							<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>
            </div>
			</main><!-- #main -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

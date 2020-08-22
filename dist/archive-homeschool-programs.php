<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package arc
 */
get_header();
?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
$type = "homeschool-programs";
?>

<div class="wrapper" id="archive-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
            <main class="site-main mx-auto archive-<?= $type; ?>" id="main">
                <?php
                
                $query = new WP_Query(array(
                    'post_type'      => $type,
                    'post_status'    => 'publish',
                    'order'          => 'ASC',
                    'posts_per_page' => -1,
                )); 
                ?>
                <?php if ( $query->have_posts() ) : ?>
                <header class="page-header">
                    <h1 class="page-title"><?php echo post_type_archive_title( '', false ); ?></h1>
                </header><!-- .page-header -->
                <div class="container">
                <div class="card-deck">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="card deck-item mb-3">
                        <a href="<?php the_permalink(); ?>">
                            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?> picture">
                        </a>
                        <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        <div class="card-footer p-0">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary w-100 text-white rounded-0 p-3">Learn More</a>
                        </div>
                    </div>
                    <?php endwhile ;?>
                </div>
                </div>
                <?php endif ; ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
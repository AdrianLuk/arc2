<?php
/**
 * Template Name: About Page
 */

    get_header();
?>
<?php
$container = 'container';
?>

<div class="wrapper" id="about-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
        <div class="row">
            <main class="site-main mx-auto container" id="main">
                <header class="page-header">
                    <h1 class="page-title text-center"><?php the_title(); ?></h1>
                </header><!-- .page-header -->
                <?php the_content(); ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
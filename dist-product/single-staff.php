<?php
    get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php 

?>
    <div class="wrapper p-0" id="single-wrapper">

	<div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">
            <?php while (have_posts() ): the_post(); ?>
            <div id="staff-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="text-white home-banner-inner text-center">
                        <h2 class="font-weight-bold"><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
            <div class="container staff" id="directors">
                <?php while( have_rows('staff_member') ) : the_row(); 
                    $picture = get_sub_field('picture') ? get_sub_field('picture') : '';
                    $name = get_sub_field('name') ? get_sub_field('name') : '';
                    $title = get_sub_field('title') ? get_sub_field('title') : '';
                    $education = get_sub_field('education') ? get_sub_field('education') : '';
                    $description = get_sub_field('description') ? get_sub_field('description') : '';
                    $credentials = get_sub_field('credentials') ? get_sub_field('credentials') : '';
                ?>
            
                <div class="row align-items-center justify-content-center my-3">
                <?php if($picture): ?>
                    <div class="col-12 col-md-3">
                        <img src="<?= $picture ?>" alt="<?= $name ?>" class="img-fluid">
                    </div>
                <?php endif ?>
                    <div class="col-12 col-md-9 text-center mt-3">
                        <h2 class="staff-name font-weight-bold text-primary"><?= $name ?></h2>
                        <h3 class="h4 staff-title text-primary"><?= $title ?></h3>
                        <?php if($education) : ?>
                        <p class="lead staff-education font-italic"><?= $education ?></p>
                        <?php endif ?>
                        <?php if (have_rows('credentials')) : ?>
                        <ul class="credentials-list mx-auto text-left">
                        <?php while (have_rows('credentials')) : the_row(); 
                        $cred = get_sub_field('credential');
                        ?>
                        <li class="font-italic"><?= $cred; ?></li>
                        <?php endwhile ?>
                        </ul>
                        <?php endif ?>
                        <p class="staff-description mt-3 text-justify"><?= $description ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endwhile ?>
            </main>
        </div>
    </div>
    
    <?php
    get_footer();
    ?>
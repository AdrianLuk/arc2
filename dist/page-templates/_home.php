<?php
/**
 * Template Name: Home Page
 */

get_header();

?>
<div class="wrapper p-0" id="single-wrapper">

	<div id="content" tabindex="-1">

        <main class="site-main" id="main">
            <?php if (have_rows('home_hero_section')): ?>
            <?php while (have_rows('home_hero_section')): the_row();
    $hero_title = get_sub_field('hero_title') ? get_sub_field('hero_title') : '';
    $hero_subheading = get_sub_field('hero_subheading') ? get_sub_field('hero_subheading') : '';
    $hero_cta_button = get_sub_field('hero_cta_button') ? get_sub_field('hero_cta_button') : '';
    ?>
	                <div id="homepage-top-banner" class="p-0 section home-hero-section hero-section bg-position bg-top-center">
	                    <?php if (have_rows('hero_slider')): ?>
	                    <div class="homepage-swiper swiper-container">
	                        <div class="swiper-wrapper">
	                            <?php while (have_rows('hero_slider')): the_row();
        $hero_slide_image = get_sub_field('hero_slide_image') ? get_sub_field('hero_slide_image') : '';
        ?>
		                            <div class="swiper-slide" style="background-image: url('<?=$hero_slide_image;?>');"></div>
		                            <?php endwhile;?>
	                        </div>
	                    </div>
	                    <?php endif;?>
                <div class="overlay"></div>
                    <div class="container">
                        <div class="text-white home-banner-inner text-center">
                            <h1 class="my-3"><?=$hero_title;?></h1>
                            <h2 class="h5"><?=$hero_subheading;?></h2>
                            <a href="<?=$hero_cta_button['url'];?>" class="btn btn-primary btn-lg hero-cta cta-btn"><?=$hero_cta_button['title'];?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            <?php endif;?>
            <?php if (have_rows('home_offerings_section')): ?>
                <?php while (have_rows('home_offerings_section')): the_row();?>
	                    <?php
    $section_name = get_sub_field('section_name') ? get_sub_field('section_name') : '';
    $section_description = get_sub_field('section_description') ? get_sub_field('section_description') : '';
    $section_background = get_sub_field('section_background') ? get_sub_field('section_background') : '';
    $section_cta = get_sub_field('section_cta') ? get_sub_field('section_cta') : '';
    ?>
	                    <section style="background-image:url('<?=$section_background;?>');" class="offerings" id="Home-offerings">
	                    <div class="overlay"></div>
	                        <div class="text-white offerings-banner-inner text-center">
	                            <h2 class="offerings-title"><?=$section_name;?></h2>
	                            <p class=" p-3"><?=$section_description;?></p>
	                            <?php if ($section_cta): ?>
	                            <a href="<?=$section_cta['url'];?>" class="cta btn btn-primary btn-lg text-white"><?=$section_cta['title'];?></a>
	                            <?php endif?>
                        </div>
                    </section>
                <?php endwhile;?>
            <?php endif;?>
            <div class="container p-0">
                <div id="instagram-feed" class="py-3">
                    <h2 class="instagram-feed-title text-center text-uppercase"><span class="fa fa-instagram"></span> Keep Up With Arc</h2>
                    <ul class="instagram-photos pt-3 pl-0"></ul>
                </div>
            </div>
        </main>
    </div>
</div>
    <?php if (have_rows('footer_cta_section')): ?>

        <?php while (have_rows('footer_cta_section')): the_row();?>
	            <?php
    $section_heading = get_sub_field('section_heading') ? get_sub_field('section_heading') : '';
    $section_subheading = get_sub_field('section_subheading') ? get_sub_field('section_subheading') : '';
    $section_background = get_sub_field('section_background') ? get_sub_field('section_background') : '';
    $section_link = get_sub_field('section_link') ? get_sub_field('section_link') : '';
    ?>
	            <div class="footer-cta" style="background-image: url('<?=$section_background;?>');">
	                <div class="overlay"></div>
	                <div class="footer-cta-content container">
	                    <h2 class="footer-cta-heading mx-auto"><?=$section_heading;?></h2>
	                    <h3 class="footer-cta-subheading"><?=$section_subheading;?></h3>
	                    <a href="<?=$section_link['url'];?>" class="footer-cta-button btn-primary btn btn-lg"><?=$section_link['title'];?></a>
	                </div>
	            </div>
	        <?php endwhile?>
    <?php endif?>
    <?php
get_footer();
?>
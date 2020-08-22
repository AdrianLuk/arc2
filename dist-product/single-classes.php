<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper p-0" id="single-wrapper">

	<div class="<?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">

				<?php while (have_posts()): the_post();?>
								<?php
    $class_availability = get_field('class_availability');
    $class_picture = get_field('class_picture') ? get_field('class_picture') : '';
    $class_description = get_field('class_description') ? get_field('class_description') : '';
    $class_title = get_field('class_title') ? get_field('class_title') : '';
    $class_registration_link = get_field('class_registration_link') ? get_field('class_registration_link') : '';
    ?>
				<div id="class-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full');?>)">
				<div class="overlay"></div>
					<div class="container">
						<div class="text-white home-banner-inner text-center">
							<h2 class="font-weight-bold"><?php the_title();?></h2>
						</div>
					</div>
				</div>
				<div class="class container my-5">
					<div class="class-row row">
						<?php if ($class_picture): ?>
						<div class="class-left col-12 col-md-3">
							<div class="h-100 class-left-inner">
								<a href="#" data-toggle="modal" data-target="#class-modal"><img class="class-left-img img-fluid" src="<?=$class_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>"></a>
								<div id="class-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
										<img class="class-left-img img-fluid" src="<?=$class_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>">
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif?>
                        <div class="class-right col-12 col-md-8 offset-md-2">
                            <div class="h-100 class-right-inner d-flex flex-column justify-content-around">
                                <div class=" py-3 class-right-description">
                                    <?=$class_description;?>
                                </div>
                                <a href="/contact" class="cta btn btn-primary btn-lg text-white">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
						<?php arc_post_nav();?>
                </div>
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer();?>

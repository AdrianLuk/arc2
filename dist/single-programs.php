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
    $program_availability = get_field('program_availability');
    $program_picture = get_field('program_picture') ? get_field('program_picture') : '';
    $program_description = get_field('program_description') ? get_field('program_description') : '';
    $program_age = get_field('program_age') ? get_field('program_age') : '';
    $program_date = get_field('program_date') ? get_field('program_date') : '';
    $program_fee = get_field('program_fee') ? get_field('program_fee') : '';
    $program_material_fee = get_field('program_material_fee') ? get_field('program_material_fee') : '';
    $program_price = get_field('program_price') ? get_field('program_price') : '';
    $program_registration_link = get_field('program_registration_link') ? get_field('program_registration_link') : '';

    ?>
		                <div id="program-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full');?>)">
		                <div class="overlay"></div>
		                    <div class="container">
		                        <div class="text-white home-banner-inner text-center">
		                            <h2 class="font-weight-bold"><?php the_title();?></h2>
		                        </div>
		                    </div>
		                </div>
		                <div class="program container my-5">
		                    <div class="program-row row">
		                        <div class="program-left col-12 col-md-3">
		                            <div class="h-100 program-left-inner">
		                            <?php if ($program_picture): ?>
		                                <a href="#" data-toggle="modal" data-target="#program-modal">
		                                    <img class="program-left-img img-fluid" src="<?=$program_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>">
		                                </a>
		                                <div id="program-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		                                <div class="modal-dialog modal-lg">
		                                    <div class="modal-content">
		                                    <img class="program-left-img img-fluid" src="<?=$program_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>">
		                                    </div>
		                                </div>
		                            </div>
		                            <?php endif?>
                            <?php if ($program_availability): ?>
                                <a href="<?=$program_registration_link;?>" class="mt-3 program-left-register-link btn-register btn btn-primary">Register Now</a>
                            <?php else: ?>
                                <a href="javascript: void(0);" class="mt-3 program-left-register-link btn-secondary btn disabled" tabindex="-1">Registration Closed</a>
                            <?php endif?>
                            </div>
                        </div>
                        <div class="program-right col-12 col-md-9">
                            <div class="h-100 program-right-inner d-flex flex-column justify-content-around">
                                <div class="program-right-info">
                                    <div class="row py-3">
                                    <div class="col-12 program-right-date text-center">
                                        <h2 class="text-uppercase text-primary font-weight-bold">Class Start Date</h2>
                                    <p><?=$program_date;?></p>
                                    </div>
                                </div>
                                <table class="text-center program-table table-sm table table-responsive mx-auto">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle;">Age Group</th>
                                            <th style="vertical-align: middle">Program</th>
                                            <th style="vertical-align: middle">Materials</th>
                                            <th style="vertical-align: middle;" class="total-price" >Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="vertical-align: middle" class="age-group"><?=$program_age?></th>
                                            <td style="vertical-align: middle">$<?=$program_fee;?></td>
                                            <td style="vertical-align: middle">$<?=$program_material_fee;?></td>
                                            <th style="vertical-align: middle;" class="total-price" scope="row">$<?=$program_price;?></th>
                                        </tr>
                                    </tbody>
                                </table>

                                </div>
                                <div class="program-right-description">
                                    <?=$program_description;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php arc_post_nav();?>
				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer();?>

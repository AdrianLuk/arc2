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
    $camp_availability = get_field('camp_availability');
    $camp_picture = get_field('camp_picture') ? get_field('camp_picture') : '';
    $camp_description = get_field('camp_description') ? get_field('camp_description') : '';
    $camp_age = get_field('camp_age') ? get_field('camp_age') : '';
    $camp_date = get_field('camp_date') ? get_field('camp_date') : '';
    $camp_program_fee = get_field('camp_program_fee') ? get_field('camp_program_fee') : '';
    $camp_material_fee = get_field('camp_material_fee') ? get_field('camp_material_fee') : '';
    $camp_price = get_field('camp_price') ? get_field('camp_price') : '';
    $camp_registration_link = get_field('camp_registration_link') ? get_field('camp_registration_link') : '';

    ?>
			                <div id="camp-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full');?>)">
			                <div class="overlay"></div>
			                    <div class="container">
			                        <div class="text-white home-banner-inner text-center">
			                            <h2 class="font-weight-bold"><?php the_title();?></h2>
			                        </div>
			                    </div>
			                </div>
			                <div class="camp container my-5">
			                    <div class="camp-row row">
			                        <div class="camp-left col-12 col-md-3">
			                            <div class="h-100 camp-left-inner">
			                                <?php if ($camp_picture): ?>
			                                <a href="#" data-toggle="modal" data-target="#camp-modal" ><img class="camp-left-img img-fluid" src="<?=$camp_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>"></a>
		    <div id="camp-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			                                        <div class="modal-dialog modal-lg">
			                                            <div class="modal-content">
		                                                    <img class="camp-left-img img-fluid" src="<?=$camp_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>">
			                                            </div>
			                                        </div>
			                                    </div>
			                                <?php endif?>
                                <?php if ($camp_availability): ?>
                                <a href="<?=$camp_registration_link;?>" class="mt-3 camp-left-register-link btn-register btn btn-primary">Register Now</a>
                                <?php else: ?>
                                <a href="javascript: void(0);" class="mt-3 camp-left-register-link btn-secondary btn disabled" tabindex="-1">Registration Closed</a>
                                <?php endif?>
                            </div>
                        </div>
                        <div class="camp-right col-12 col-md-9">
                            <div class="h-100 camp-right-inner d-flex flex-column justify-content-around">
                                <div class="camp-right-info">
                                    <div class="row py-3">
                                    <div class="col-12 camp-right-date text-center">
                                        <h2 class="text-uppercase text-primary font-weight-bold">Class Start Date</h2>
                                    <p><?=$camp_date;?></p>
                                    </div>
                                </div>
                                <table class="text-center camp-table table-sm table table-responsive mx-auto">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle;">Age Group</th>
                                            <th style="vertical-align: middle">Program</th>
                                            <th style="vertical-align: middle;" class="total-price" >Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th style="vertical-align: middle" class="age-group"><?=$camp_age?></th>
                                            <td style="vertical-align: middle">$<?=$camp_program_fee;?></td>
                                            <th style="vertical-align: middle;" class="total-price" scope="row">$<?=$camp_price;?></th>
                                        </tr>
                                    </tbody>
                                </table>

                                </div>
                                <div class="camp-right-description">
                                    <?=$camp_description;?>
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

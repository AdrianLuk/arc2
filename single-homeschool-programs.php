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
    $homeschool_availability = get_field('homeschool_availability');
    $homeschool_picture = get_field('homeschool_picture') ? get_field('homeschool_picture') : '';
    $homeschool_description = get_field('homeschool_description') ? get_field('homeschool_description') : '';
    $homeschool_age = get_field('homeschool_age') ? get_field('homeschool_age') : '';
    $homeschool_date = get_field('homeschool_date') ? get_field('homeschool_date') : '';
    $homeschool_program_fee = get_field('homeschool_program_fee') ? get_field('homeschool_program_fee') : '';
    $homeschool_material_fee = get_field('homeschool_material_fee') ? get_field('homeschool_material_fee') : '';
    $homeschool_price = get_field('homeschool_price') ? get_field('homeschool_price') : '';
    $homeschool_registration_link = get_field('homeschool_registration_link') ? get_field('homeschool_registration_link') : '';

    ?>
		                <div id="homeschool-top-banner" class="p-0 section hero-section bg-position bg-top-center " style="background-image: url(<?php the_post_thumbnail_url('full');?>)">
		                <div class="overlay"></div>
		                    <div class="container">
		                        <div class="text-white home-banner-inner text-center">
		                            <h2 class="font-weight-bold"><?php the_title();?></h2>
		                        </div>
		                    </div>
		                </div>
		                <div class="homeschool container my-5">
		                    <div class="homeschool-row row">
		                        <div class="homeschool-left col-12 col-md-3">
		                            <div class="h-100 homeschool-left-inner">
		                                <?php if ($homeschool_picture): ?>
		                                <a href="#" data-toggle="modal" data-target="#homeschool-modal"><img class="homeschool-left-img img-fluid" src="<?=$homeschool_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>"></a>
	                                    <div id="homeschool-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog modal-lg">
	                                            <div class="modal-content">
	                                            <img class="homeschool-left-img img-fluid" src="<?=$homeschool_picture;?>" alt="<?php the_title();
    echo " " . "picture"?>">
	                                            </div>
	                                        </div>
	                                    </div>
		                                <?php endif?>
                                <?php if ($homeschool_availability): ?>
                                <a href="<?=$homeschool_registration_link;?>" class="mt-3 homeschool-left-register-link btn-register btn btn-primary">Register Now</a>
                                <?php else: ?>
                                <a href="javascript: void(0);" class="mt-3 homeschool-left-register-link btn-secondary btn disabled" tabindex="-1">Registration Closed</a>
                                <?php endif?>
                            </div>
                        </div>
                        <div class="homeschool-right col-12 col-md-9">
                            <div class="h-100 homeschool-right-inner d-flex flex-column justify-content-around">
                                <div class="homeschool-right-info">
                                    <div class="row py-3">
                                    <div class="col-12 homeschool-right-date text-center">
                                        <h2 class="text-uppercase text-primary font-weight-bold">Class Start Date</h2>
                                    <p><?=$homeschool_date;?></p>
                                    </div>
                                </div>
                                <table class="text-center homeschool-table table-sm table table-responsive mx-auto">
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
                                            <th style="vertical-align: middle" class="age-group"><?=$homeschool_age?></th>
                                            <td style="vertical-align: middle">$<?=$homeschool_program_fee;?></td>
                                            <td style="vertical-align: middle">$<?=$homeschool_material_fee;?></td>
                                            <th style="vertical-align: middle;" class="total-price" scope="row">$<?=$homeschool_price;?></th>
                                        </tr>
                                    </tbody>
                                </table>

                                </div>
                                <div class="homeschool-right-description">
                                    <?=$homeschool_description;?>
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

<?php
/**
 * Template Name: FAQ Page
 */

    get_header();
?>
<?php
$container = 'container';
?>

<div class="wrapper" id="about-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
    
        <div class="row">
            <main class="site-main mx-auto" id="main">
                <header class="page-header">
                    <h1 class="page-title text-center"><?php the_title(); ?></h1>
                </header><!-- .page-header -->
                <?php if ( have_rows('qa_set') ) : $counter = 1; ?>
                    <div class="accordion" id="faq-accordion">
                    <?php while( have_rows('qa_set') ) : the_row();
                    $question = get_sub_field('question') ? get_sub_field('question') : '';
                    $answer = get_sub_field('answer') ? get_sub_field('answer') : '';
                    ?>
                    <div class="card">
                        <div class="card-header" id="heading_<?= $counter; ?>">
                            <h5 class="mb-0">
                                <p class="accordion-trigger"  data-toggle="collapse" data-target="#faq_<?= $counter; ?>" aria-expanded="true" aria-controls="faq_<?= $counter; ?>">
                                <?= $question; ?>
                                </p>
                            </h5>
                        </div>

                        <div id="faq_<?= $counter; ?>" class="collapse <?php $counter == 1 ? 'show' : ''; ?>" aria-labelledby="heading_<?= $counter; ?>" data-parent="#faq-accordion">
                            <div class="card-body">
                                <?= $answer; ?>
                            </div>
                        </div>
                    </div>
                    <?php $counter++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
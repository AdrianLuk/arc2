<?php
/**
 * Template Name: Homeschool Programs
 */

    get_header();

?>
<div class="container">
<?php
    $title = get_field('homeschool_title') ? get_field('homeschool_title') : '';
?>
    <h1 class="text-center text-uppercase"><?= $title; ?></h1>
</div>
    <?php

    get_footer();
    ?>
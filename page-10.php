<!--
-Adding the "page-" to the file name allows you to edit customize specific page templates.
-If you change the slug in the Wordpress admin panel to this page, this template will not function, unless the file name corresponds to the page id.
 -->

<?php get_header(); ?>

<!-- Main Banner -->
<div class="jumbotron" style="background-image: url(<?php header_image(); ?>);">
    <div id="main-banner-container" class="container">
        <h1>Burger of the Month</h1>

<?php
if( have_posts() ):

    while( have_posts() ): the_post(); ?>
        <?php the_content() ?>


    <?php endwhile;

endif;

?>
    </div>
</div>

<!-- About Us -->
<div id="about-us-container" class="container-fluid">
    <div class="container">
        <h1 class="text-center">About Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

<!-- Menu -->
<div id="menu-container" class="container-fluid">
    <div class="container">
        <h1 class="text-center">Menu</h1>
        <?php echo do_shortcode("[fdm-menu id=56]"); ?>
    </div>
</div>

<!-- Menu -->
<div id="delivery-container" class="container-fluid">
    <div class="container">
        <h1 class="text-center">Delivery</h1>
        <p class="text-center">Uber Eats/Grubhub placeholder</p>
    </div>
</div>

<?php get_footer(); ?>

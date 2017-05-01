<!--
-Adding the "page-" to the file name allows you to edit customize specific page templates.
-If you change the slug in the Wordpress admin panel to this page, this template will not function, unless the file name corresponds to the page id.
 -->

<?php get_header(); ?>

<div class="jumbotron" style="background-image: url(<?php header_image(); ?>);">
    <div class="container">
        <h1>Burger of the Month</h1>
        <p>Pepperjack Jalapeno Burger</p>
    </div>
</div>

<?php
if( have_posts() ):

    while( have_posts() ): the_post(); ?>

        <p><?php the_content() ?></p>

        <h3><?php the_title() ?></h3>

        <hr/>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>

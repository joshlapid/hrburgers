<!-- Adding the "Template Name" comment in the php adds this to the Wordpress page templates section. -->
<?php get_header(); ?>

<h1>Halphen Red Burgers</h1>
<?php
/*
    Template Name: No Title
*/
if( have_posts() ):

    while( have_posts() ): the_post(); ?>

        <h1>Static hard coded title</h1>

        <small>Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>, in<?php the_category() ?></small>

        <p><?php the_content() ?></p>

        <hr/>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>

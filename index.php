<?php get_header(); ?>

<h1>Halphen Red Burgers</h1>
<?php
if( have_posts() ):

    while( have_posts() ): the_post(); ?>

        <h3><?php the_title() ?></h3>

        <!-- Adds a thumbnail from the Featured Image section in the WP admin. -->
        <div class="thumnail-img"><?php the_post_thumbnail( 'thumbnail' ) ?></div>

        <small>Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>, in<?php the_category() ?></small>

        <p><?php the_content() ?></p>

        <hr/>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>

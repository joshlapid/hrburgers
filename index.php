<?php get_header(); ?>

<h1>Halphen Red Burgers</h1>
<?php
if( have_posts() ):

    while( have_posts() ): the_post(); ?>

        <!-- 'content' is a placeholder for the file name content.php, it can be changed to anything. -->
        <?php  get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile;

endif;

?>

<?php get_footer(); ?>

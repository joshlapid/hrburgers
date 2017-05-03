<!--
-Adding the "page-" to the file name allows you to edit customize specific page templates.
-If you change the slug in the Wordpress admin panel to this page, this template will not function, unless the file name corresponds to the page id.
 -->

<?php get_header(); ?>

<div class="jumbotron" style="background-image: url('http://hrburgers.com/wp-content/uploads/2017/05/halphen-bg1.jpg');">
    <div class="container">

<?php
if( have_posts() ):

    while( have_posts() ): the_post(); ?>

            <h1><?php the_title() ?></h1>

            <p><?php the_content() ?></p>

    <?php endwhile;

endif;

?>
    </div>
</div>
<?php get_footer(); ?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Halphen Red</title>
        <?php wp_head(); ?>

    </head>

<!-- Creates arrays of classes depending on whether or not you are on the front page -->
    <?php

        if( is_front_page() ):
            $halphen_classes = array( 'awesome-class', 'my-class' );
        else:
            $halphen_classes = array( 'not-awesome-class' );
        endif;
    ?>

<!-- Body class accesses the $halphen_classes variable created above to add a class to the body. -->
    <body <?php body_class( $halphen_classes ) ?>>

        <?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>

        <!-- This will print the custom header to each of the pages since its in the header.php file. -->
        <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">

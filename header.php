<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Halphen Red</title>
        <?php wp_head(); ?>

    </head>

    <?php

        if( is_front_page() ):
            $halphen_classes = array( 'awesome-class', 'my-class' );
        else:
            $halphen_classes = array( 'not-awesome-class' );
        endif;
    ?>

    <body <?php body_class( $halphen_classes ) ?>>

        <?php wp_nav_menu( array('theme_location' => 'primary' ) ); ?>

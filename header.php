<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Halphen Red</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300,500,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
                        <div class="container">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/hrburgers/index.php">HALPHEN RED</a>
                          </div>
                          <div id="navbar" class="navbar-collapse collapse">

                                <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'container' => false,
                                        'menu_class' => 'nav navbar-nav navbar-right'
                                        )
                                    );
                                ?>

                          </div><!--/.nav-collapse -->
                        </div><!--/.container-fluid -->
                     </nav>
                </div>
            </div>
        </div>

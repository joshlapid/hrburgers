==================================================
This is a WordPress template I am creating from the ground up.
==================================================


4/23/2017
- Setup phpMyAdmin, Apache and mySQL.
- Setup header.php, footer.php, index.php, functions.php along with CSS and JS folders according to WordPress theme standards.
- Properly included CSS and JS files through the functions.php file using the wp_enqueue_style and wp_enqueue_script hooks.
=========================

4/27/2017
- Activated the WordPress admin appearance feature 'menus' using the add_theme_support hook in the php file.
- Created a menu using the menu feature that I enabled.
=========================

4/28/2017
- Implemented the post loop on my index page to show all of the posts I've created.
- Added the body_class() WordPress function to the body tag to add classes to the body depending which page you are on.

- Created custom page templates by creating files beginning with "page-". The name after "page-" corresponds to the slug of the URL or page id.
- Adding a "Template Name:" comment within the php adds the template to the page attributes section in the wp-admin
=========================

4/29/2017
- Added  'custom-background', 'custom-header', and 'post-thumbnails' using the add_theme_support hook in the functions.php file.
- 'custom-background' - enables a 'background' option on the appearance section of the wp-admin.
- 'custom-header' - enables a 'header' option on the appearance section of the wp-admin.
- 'post-thumbnails' - enables a Featured image section when editing a post.
=========================

4/30/2017
- Used add_theme_support hook to enable 3 addition formats to choose from: 'aside', 'image', 'video'.
- Replaced formatting in the post loop on index.php with get_template_part( 'content', get_post_format() ); to change the format of the post to correspond to the chosen post format.

- Added JQuery using the wp_enqueue_script hook. Jquery is already built in so all I needed to do was add wp_enqueue_script('jquery').
- Added Bootstrap using the wp_enqueue_style and wp_enqueue_script. Also added bootstrap font folder.
- Created a Bootstrap container to hold all of the content.
- Integrated Bootstrap navbar classes into the wp_nav_menu function so that the menu is functional with Bootstrap.

- Created a custom template for home page (page-10.php).
- Added Bootstrap jumbotron that intakes WP header image for background.
- Added some Google fonts.
- Made a few styling adjustments in the halphen.css file.
- Added navbar opacity effect on scroll down.

=========================
5/2/2017
- Got website working with Bluehost.

========================
5/10/2017
- Converted website design to a one-page format.


*Needs to fix: JQuery CDN bug.

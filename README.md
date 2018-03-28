# Wordpress-Bootstrap-4-Theme

Documentation will be added soon, theme submitted to WordPress for approval

Track the ticket here -> https://themes.trac.wordpress.org/ticket/50434

Join the review team here ->  https://make.wordpress.org/themes/handbook/get-involved/become-a-reviewer/

This article summarizes what you need to know to install it
[Read Intro](https://www.happilyon.com/blog/wordpress-bootstraps-4-jumbotron-theme.html)

Download the ZIP file and upload to your WordPress site or local development environment

Theme Check Pass, also imported XML test data, We have also been using a bootstraps 3 version of this theme for some time now, with no issue whenever WordPress or plugins update.

![test-pass](https://user-images.githubusercontent.com/24851606/35274960-23fa5a20-0064-11e8-9de0-3edff57a8765.png)


Small code error

Code should have been this 
``` <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() );?>/images/favicon.ico"> ```

But was this
``` <link rel="shortcut icon" href="<?phpecho esc_url( get_template_directory_uri() );?>/images/favicon.ico"> ```

It is fixed now and installed on a live site

![screen--shot](https://user-images.githubusercontent.com/24851606/38028183-be55c028-32af-11e8-9e05-66af1ef1f9ed.png)


Via [Happilyon](https://www.happilyon.com)


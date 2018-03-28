<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() );?>/images/favicon.ico">


    <?php wp_head(); ?>  

  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      
      <a class="navbar-brand" href="<?php  echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri());?>/images/Happilyon.svg" width="30px" height="30px"></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
     <?php 
            $args = array(
              'menu'        => 'header-menu',
              'menu_class'  => 'nav navbar-nav',
              'container'   => 'false'
            );
            wp_nav_menu( $args );
      ?>
      
        </ul>

  <br>
  
  <div align="center">

    <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'happilyon') ?></span>
            <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'happilyon') ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label', 'happilyon') ?>" />
        </label>
      
        <input type="submit" class="btn btn-outline-success my-2 my-sm-0" 
            value="<?php echo esc_attr_x( 'Search', 'submit button', 'happilyon') ?>" />
    </form>  

    
  </div>

      </div>
    </nav>

    <br><br><br>
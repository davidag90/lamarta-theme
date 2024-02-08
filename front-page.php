<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

  <div id="content" class="site-content container-fluid">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>
      <div class="hero-slideshow-wrapper position-relative width-100">
        <img class="hero-slideshow-bg" src="<?php echo get_stylesheet_directory_uri() ?>/img/front-page/hero-bg.jpg">

        <div class="to-content position-absolute d-flex flex-column justify-content-center align-items-center">
          <div class="to-content-head d-flex flex-column justify-content-center align-items-center bg-primary bg-opacity-75 text-light p-4 mb-3">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/front-page/logotipo.svg" />
            <p class="mt-2 mb-0">Vinos cordobeses - Productos de la región</p>
          </div>

          <div class="to-content-link">
            <a class="btn btn-light link-primary" href="#finca-lamarta">Conocer más!</a>
          </div>
        </div><!-- .to-content -->
      </div><!-- .hero-slideshow-wrapper -->
      
      <div class="row">
        <div class="<?= bootscore_main_col_class(); ?>">
          <main id="main" class="site-main">
            <?php the_post(); ?>
            <header class="entry-header d-none">
              <h1><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
              <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
              <?php comments_template(); ?>
            </footer>

          </main>

        </div>
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>

<?php
get_footer();

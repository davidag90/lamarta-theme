<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer>
  <div class="bootscore-footer bg-primary">
    <div class="container-fluid">
      <div class="row bg-secondary py-3 ">
        <div class="col-12">
          <!-- Top Footer Widget -->
          <?php if (is_active_sidebar('top-footer')) : ?>
            <?php dynamic_sidebar('top footer'); ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="row pt-3">
        <!-- Footer 1 Widget -->
        <div id="widget-1-wrapper" class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div id="widget-2-wrapper" class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div id="widget-3-wrapper" class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div id="widget-4-wrapper" class="col-md-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav justify-content-center %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>
  </div>

  <div class="bootscore-info bg-primary text-bg-primary border-top py-2 text-center">
    <div class="container-fluid">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <small class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> <?php bloginfo('name'); ?></small>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-info shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

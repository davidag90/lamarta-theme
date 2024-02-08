<?php get_header(); ?>
  <div id="content" class="site-content">
    <div id="primary" class="content-area">

      <main id="main" class="site-main bg-light bg-opacity-50">

        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
        <header class="entry-header featured-full-width-img height-75 bg-dark text-white mb-3" style="background-image: linear-gradient(to bottom, rgba(44, 8, 22, 0.3), rgba(44, 8, 22, 0.5)), url('<?= $thumb['0']; ?>')">
          <div class="<?= bootscore_container_class(); ?> entry-header h-100 d-flex align-items-center justify-content-center">
            <div>
              <h1 class="entry-title"><?php the_title(); ?></h1>
            </div>
          </div>
        </header>

        <div class="<?= bootscore_container_class(); ?> pb-5">

          <!-- Hook to add something nice -->
          <?php bs_after_primary(); ?>

          <div class="row">
            <div class="col-xs-12 col-md-10 col-xl-8">
              <div class="entry-content">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
        </div>

      </main>

    </div>
  </div>

<?php
get_footer();

<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="page-container container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php 
      $new_query = new WP_Query($query_vars);
      ?>
      <div class="journal-grid">
      <?php while ( have_posts() ) : the_post(); ?>
        
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full' ); ?>
              <?php endif; ?>

              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

              <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
              </div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_excerpt(); ?>
              
              <div class="social-buttons">
                <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
                <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
                <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
              </div>
            </div><!-- .entry-content -->
            <?php

            ?>
            <footer class="entry-footer">
              <?php red_starter_entry_footer(); ?>
            </footer><!-- .entry-footer -->
          </article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>
    </div>
    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

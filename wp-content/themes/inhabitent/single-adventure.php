<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full' ); ?>
            <?php endif; ?>
            <div class="adventure-container">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

            <div class="entry-meta">
              <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
          </div>
          </header><!-- .entry-header -->
          <div class="adventure-container">
          <div class="entry-content">
            <?php the_content(); ?>
            <div class="social-buttons">
              <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
              <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
              <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
            </div>
          </div><!-- .entry-content -->
        </div>
        </article><!-- #post-## -->


    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

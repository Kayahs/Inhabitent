<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<header class="entry-header about-hero">
    <h1 class="entry-title">About</h1>
</header><!-- .entry-header -->
<div class="about-container">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-## -->


      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div>

<?php get_footer(); ?>

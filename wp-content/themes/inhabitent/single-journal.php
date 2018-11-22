<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="page-container container">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

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
              <?php the_content(); ?>
              <div class="journal-info">
                <?php
                $categories = [];
                $tags = []; 
                if (get_the_tags()) {
                  foreach (get_the_tags() as $tag) {
                    $tagstr = "<a href='" . get_tag_link($tag->term_id) . "'>$tag->name</a>";
                    array_push($tags, $tagstr);
                  }
                }
                if (get_the_category()) {
                  foreach (get_the_category() as $cat) {
                    $catstr = "<a href='" . get_category_link($cat->term_id) . "'>$cat->name</a>";
                    array_push($categories, $catstr);
                  }
                }
                echo  "<span class='cat-links'>Posted In →" . implode(', ', $categories) . "</span> <span class='tag-links'>Tagged →" . implode(', ', $tags) . "</span>";
                ?>  
              </div>
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


        <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // End of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>

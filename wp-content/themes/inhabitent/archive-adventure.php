<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">
      <header class="page-header">
          <h1 class="page-title">Latest Adventures</h1>
      </header><!-- .page-header -->
    <?php if ( have_posts() ) : ?>

      <?php 
        $query_vars = $wp_query->query_vars;
        $query_vars['order'] = 'ASC';
        $new_query = new WP_Query($query_vars);
      ?>
      <div class="adventure-grid">
      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
<!-- <a href="<?php //echo esc_url(the_permalink());?>"> -->
            
        <div class="adventure-grid-item">
          <div class="adventure-item-wrapper">
            <div class="thumbnail-wrapper">
                <?php the_post_thumbnail( 'full' ); ?>
              
            </div>
            <div class="adventure-info">
              <div class="journal-title">
                <h2 class="entry-title">
                  <a href="<?php the_permalink();?>">
              <?php echo the_title("", "</a></h2>"); ?>
              </div>
              
              <a class = "adventure-button" href = "<?php the_permalink(); ?>">Read More</a>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
    </div>
    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_footer(); ?>

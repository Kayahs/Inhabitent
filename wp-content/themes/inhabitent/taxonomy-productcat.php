<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main container" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <?php
          $title = get_the_archive_title();
          $title = single_cat_title( '', false);
          echo "<h1 class='page-title'>$title</h1>";
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
      </header><!-- .page-header -->

      <?php 
      $query_vars = $wp_query->query_vars;
      $query_vars['orderby'] = 'title';
      $query_vars['order'] = 'ASC';
      $new_query = new WP_Query($query_vars);?>

      <div class="product-grid">
     
      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
        <div class="product-grid-item">
          <div class="thumbnail-wrapper">
            <a href="<?php echo esc_url(the_permalink());?>">
              <?php the_post_thumbnail( 'large' ); ?>
            </a>
          </div>
          <div class="product-info">
            <?php the_title('<h2 class="entry-title">', '</h2>' ); ?>
            <span class="price">$<?php echo number_format(CFS()->get('price'), 2); ?></span>
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

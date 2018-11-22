<?php
/**
 * The template for displaying product archive.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  
  <div id="primary" class="content-area container">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
      <header class="page-header">
          <h1 class="page-title">Shop Stuff</h1>
          <ul class="product-cats">
            <?php
          $argsarr = array (
            'orderby' => 'name',
            'order' => 'ASC',
            'taxonomy' => 'productcat'
          ); 
          $categories = get_terms($argsarr );
          foreach ( $categories as $category ) {
            $categorylink = home_url('/') . $category->taxonomy .'/'. $category->slug;
            ?>
            <li>
              <p>
                <a href="<?php echo $categorylink ?>"> <?php echo $category->name?></a>
              </p>
            </li>
        <?php
          }
        ?>
      </ul>
      </header><!-- .page-header -->

      <?php 
      $query_vars = $wp_query->query_vars;
      $query_vars['orderby'] = 'title';
      $query_vars['order'] = 'ASC'; 
      $query_vars['posts_per_page'] = 30;
      $new_query = new WP_Query($query_vars);
      ?>
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

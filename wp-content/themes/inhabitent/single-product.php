<?php
/**
 * The template for displaying all single product posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container add-padding">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
      <article class="single-product hentry">
        <div class="product-image-wrapper">
          <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <div class="product-content-wrapper">
          <header class="entry-header">
            <?php the_title('<h1 class="entry-title">', '</h1>' ); ?>   
          </header>
          <div class="entry-content">
            <p class="price">$<?php echo number_format(CFS()->get('price'), 2); ?></p>
              <?php the_content();?>
            <div class="social-buttons">
              <button type="button" class="black-btn"><i class="fa fa-facebook"></i>Like</button>
              <button type="button" class="black-btn"><i class="fa fa-twitter"></i>Tweet</button>
              <button type="button" class="black-btn"><i class="fa fa-pinterest"></i>Pin</button>
            </div>
          </div>
        </div>
      </article>

			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

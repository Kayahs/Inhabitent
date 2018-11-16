<?php
/**
 * The template for displaying the home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="home-hero">
  <img src=<?php echo get_stylesheet_directory_uri(). '/images/logos/inhabitent-logo-full.svg' ?>>
</div>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="shop-container container">
        <h2 class="embed-title">SHOP STUFF</h2>
        <div class="shop-embed">
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
            <!-- DO  -->
           <div class = 'product-type-wrapper'>
               <img src = "<?php echo get_template_directory_uri()."/images/product-type-icons/$category->slug.svg"?>" alt="<?php echo $category->name ?>">
               <p><?php echo $category->description ?></p>
               <p>
                   <a href="<?php echo "$categorylink" ?>" class='button'><?php echo $category->name ?> Stuff</a>
               </p>
           </div>
          <?php
          }
          ?>
          <!-- Put query here for product categories -->
        </div>
      </div>
      <div class="journal-embed container">
        <h2 class="embed-title">INHABITENT JOURNAL</h2>
        <div class="journal-embed">
          <!-- Put query here for Journal -->
        </div>
      </div>
      <div class="adventure-embed container">
        <h2 class="embed-title">LATEST ADVENTURES</h2>
        <div class="adventure-embed">
          <!-- Put query here for product categories -->
        </div>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php //get_template_part( 'template-parts/content', 'page' ); ?>

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>

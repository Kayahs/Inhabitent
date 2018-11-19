<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

      </div><!-- #content -->

      <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-container container">
          <div class="site-info">
            <?php dynamic_sidebar( 'footer' ); ?>
            <div class="footer-block">
              <div class="logo">
                <a href="<?php echo home_url('/'); ?>" rel="home">
                  <img src="<?php echo get_template_directory_uri()."/images/logos/inhabitent-logo-text.svg"?>" alt="Inhabitent logo">
                </a>
              </div>
            </div>
          </div><!-- .site-info -->
          <div class="copyright">
            <?php printf( __('Copyright &copy; 2019 Inhabitent')); ?>
          </div>
        </div>
      </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

  </body>
</html>

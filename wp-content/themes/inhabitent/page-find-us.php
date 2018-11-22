<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
  <div class="find-us-container container">
  <div id="primary" class="content-area">
    <header class="entry-header">
      <h1 class="entry-title">Find Us</h1>
    </header><!-- .entry-header -->
    <main id="main" class="site-main" role="main">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6833050880164!2d-123.14035688397895!3d49.26344827932926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H+4E8!5e0!3m2!1sen!2sca!4v1542809014904" width="760" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
          </div><!-- .entry-content -->
          <h2>SEND US EMAIL!</h2>
          <form class="contact-form" id="contactForm">
            <p class="name">
              <label>Name<span class="required">*</span></label>
              <input type="text" size="40" name="contact-name" required />
            </p>
            <p class="email">
              <label>Email<span class="required">*</span></label>
              <input type="text" size="40" pattern="email" name="contact-email" required />
            </p>
            <p class="subject">
              <label>Subject<span class="required">*</span></label>
              <input type="text" size="40" name="contact-subject" required />
            </p>  
            <p class="message">
              <label>Message<span class="required">*</span></label>
              <textarea name="contact-message" cols="40" rows="10"></textarea> 
            </p>
            <p>
              <input type="submit" value="Submit">
            </p>
          </form>
        </article><!-- #post-## -->
        

      <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>

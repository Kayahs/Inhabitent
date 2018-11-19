<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Business Hours Widget
 * @author    Akshay Manchanda <akshaykmanchanda@gmail.com>
 * @license   GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Business Hours Plugin
 * Description:       Adds Business Hours widget
 * Version:           1.0.0
 * Author:            Akshay Manchanda
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

function my_check_for_page_tree() {
 
    //start by checking if we're on a page
    if( is_page() ) {
     
        global $post;
     
        // next check if the page has parents
        if ( $post->post_parent ){
         
            // fetch the list of ancestors
            $parents = array_reverse( get_post_ancestors( $post->ID ) );
             
            // get the top level ancestor
            return $parents[0];
             
        }
         
        // return the id  - this will be the topmost ancestor if there is one, or the current page if not
        return $post->ID;
         
    }
 
}

class Business_Hours extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'business-hours';

  /*--------------------------------------------------*/
  /* Constructor
  /*--------------------------------------------------*/

  /**
   * Specifies the classname and description, and instantiates the widget.
   */
  public function __construct() {

    // TODO: update description
    parent::__construct(
      $this->get_widget_slug(),
      'Business Hours',
      array(
        'classname'  => $this->get_widget_slug().'-class',
        'description' => 'Displays Business Hours where placed.'
      )
    );

  } // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

  /*--------------------------------------------------*/
  /* Widget API Functions
  /*--------------------------------------------------*/

  /**
   * Outputs the content of the widget.
   *
   * @param array $args     The array of form elements
   * @param array $instance The current instance of the widget
   */
  public function widget( $args, $instance ) {

    if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

    // go on with your widget logic, put everything into a string and …

    extract( $args, EXTR_SKIP );

    // Manipulate the widget's values based on their input fields
/*    $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
*/    // TODO: other fields go here...

    ob_start();

    include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
    $widget_string .= ob_get_clean();
    $widget_string .= $after_widget;

    print $widget_string;

  } // end widget

  /**
   * Processes the widget's options to be saved.
   *
   * @param array $new_instance The new instance of values to be generated via the update.
   * @param array $old_instance The previous instance of values before the update.
   */
  public function update( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['monfri'] = strip_tags($new_instance['monfri']);
    $instance['sat'] = strip_tags($new_instance['sat']);
    $instance['sun'] = strip_tags($new_instance['sun']);
    
    // TODO: Here is where you update the rest of your widget's old values with the new, incoming values

    return $instance;

  } // end widget

  /**
   * Generates the administration form for the widget.
   *
   * @param array $instance The array of keys and values for the widget.
   */
  public function form( $instance ) {

    // TODO: Define default values for your variables, create empty value if no default
    $instance = wp_parse_args(
      (array) $instance,
      array(
        'title' => 'Business Hours',
        'monfri' => '9am to 5pm',
        'sat' => '10am to 2pm',
        'sun' => 'Closed'
      )
    );

    $title = strip_tags( $instance['title'] );
    $monfri = strip_tags($instance['monfri']);
    $sat = strip_tags($instance['sat']);
    $sun = strip_tags($instance['sun']);
    // TODO: Store the rest of values of the widget in their own variables

    // Display the admin form
    include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

  } // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Business_Hours' );
});

class Contact_Info extends WP_Widget {

    /**
     *
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'contact-info';

  /*--------------------------------------------------*/
  /* Constructor
  /*--------------------------------------------------*/

  /**
   * Specifies the classname and description, and instantiates the widget.
   */
  public function __construct() {

    // TODO: update description
    parent::__construct(
      $this->get_widget_slug(),
      'Contact Info',
      array(
        'classname'  => $this->get_widget_slug().'-class',
        'description' => 'Displays Contact Info where placed.'
      )
    );

  } // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

  /*--------------------------------------------------*/
  /* Widget API Functions
  /*--------------------------------------------------*/

  /**
   * Outputs the content of the widget.
   *
   * @param array $args     The array of form elements
   * @param array $instance The current instance of the widget
   */
  public function widget( $args, $instance ) {

    if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

    // go on with your widget logic, put everything into a string and …

    extract( $args, EXTR_SKIP );

    // Manipulate the widget's values based on their input fields
/*    $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
*/    // TODO: other fields go here...

    ob_start();

    include( plugin_dir_path( __FILE__ ) . 'views/contact-widget.php' );
    $widget_string .= ob_get_clean();
    $widget_string .= $after_widget;

    print $widget_string;

  } // end widget

  /**
   * Processes the widget's options to be saved.
   *
   * @param array $new_instance The new instance of values to be generated via the update.
   * @param array $old_instance The previous instance of values before the update.
   */
  public function update( $new_instance, $old_instance ) {

    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['email'] = strip_tags($new_instance['email']);
    $instance['phone'] = strip_tags($new_instance['phone']);
    $instance['address'] = strip_tags($new_instance['address']);
    // TODO: Here is where you update the rest of your widget's old values with the new, incoming values

    return $instance;

  } // end widget

  /**
   * Generates the administration form for the widget.
   *
   * @param array $instance The array of keys and values for the widget.
   */
  public function form( $instance ) {

    // TODO: Define default values for your variables, create empty value if no default
    $instance = wp_parse_args(
      (array) $instance,
      array(
        'title' => 'Contact Info',
        'email' => 'info@inhabitent.com',
        'phone' => '778-456-7891',
        'address' => '1490 W Broadway Vancouver, BC V6H 1H5'
      )
    );

    $title = strip_tags( $instance['title'] );
    $email = strip_tags($instance['email']);
    $phone = strip_tags($instance['phone']);
    $address = strip_tags($instance['address']);
    // TODO: Store the rest of values of the widget in their own variables

    // Display the admin form
    include( plugin_dir_path( __FILE__ ) . 'views/contact-admin.php' );

  } // end form

} // end class

// TODO: Remember to change 'Widget_Name' to match the class name definition
add_action( 'widgets_init', function(){
     register_widget( 'Contact_Info' );
});
